<?php
class User extends CI_Model {

	 function __construct()   {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
        $fb_config = array(
		    'appId'  => $this->config->item('fb_app_id'),
		    'secret' => $this->config->item('fb_app_secret')
		);
		$this->load->library('facebook', $fb_config);
    }

    public function getUserInfo($userId,$includeMetaData=false) {
    	$data = array();
    	$query = $this->db->get_where('evt_user', array('id' => $userId));

		foreach ($query->result() as $row) {
			$data = (array)$row;
		}

		if($includeMetaData) {
			$userMeta = $this->getUserMetaInfo($userId);
			$data = array_merge($data,$userMeta);
		}
		return $data;
    }

    public function getUserMetaInfo($userId) {
    	$data = array();
    	$query = $this->db->get_where('evt_user_meta', array('user_id' => $userId));
		foreach ($query->result() as $row) {
			$data = (array)$row;
		}
		return $data;
    }

    public function getUserIdFromFBID($fbID) {
    	$data = array();
    	$query = $this->db->get_where('evt_user', array('fb_user_id' => $fbID));
		foreach ($query->result() as $row) {
			$data = (array)$row;
		}
		return $data;
    }

    public function getFacebookFriends($pageNo) {
    	$start = ($pageNo-2)*30+1;
    	$limit = 30;
    	$access_token = $this->getFBAccessToken();
      $multiQuery["query1"] = "SELECT+uid,name,pic_square+FROM+user+WHERE+is_app_user=0+AND+uid+IN+(SELECT+uid2+FROM+friend+WHERE+uid1+=+me())+limit+{$limit}+offset+{$start}";

      $fql_query_url = 'https://graph.facebook.com/'
        . '/fql?q='.$multiQuery["query1"]
        . '&access_token=' . $access_token;
      $fql_query_result = file_get_contents($fql_query_url);
      $fql_query_result = preg_replace('/([^\\\])":([0-9]{10,})(,|})/', '$1":"$2"$3', $fql_query_result);
      $fql_query_obj = json_decode($fql_query_result, true);

    	return $fql_query_obj['data'];
    }

    public function searchFacebookFriends($searchText) {
    	$access_token = $this->getFBAccessToken();
      $multiQuery["query1"] = "SELECT+name,uid+FROM+user+WHERE+uid+IN+(SELECT+uid2+FROM+friend+WHERE+uid1=me())+AND+strpos(lower(name),lower('{$searchText}'))+>=+0+AND+is_app_user=0+limit+24";
      $fql_query_url = 'https://graph.facebook.com/'
        . '/fql?q='.$multiQuery["query1"]
        . '&access_token=' . $access_token;
      $fql_query_result = file_get_contents($fql_query_url);
      $fql_query_result = preg_replace('/([^\\\])":([0-9]{10,})(,|})/', '$1":"$2"$3', $fql_query_result);
      $fql_query_obj = json_decode($fql_query_result, true);
      return $fql_query_obj['data'];
    }

    public function getUserEvents($pageNo=2) {
    	$start = ($pageNo-2)*4;
    	$limit = 4;

      $access_token = $this->getFBAccessToken();
      
    	$multiQuery["query1"]="select+eid,all_members_count,attending_count,declined_count,description,has_profile_pic,location,name,pic_big,start_time,unsure_count+from+event+WHERE+eid+in+(select+eid+from+event_member+where+uid=me()+and+start_time+>=+'".date('Y-m-d')."'+order+by+start_time+asc)+limit+{$start},{$limit}";
      $multiQuery["query2"]="select+eid,rsvp_status,uid+from+event_member+where+eid+in+(select+eid+from+%23query1)+and+rsvp_status='attending'";
      $multiQuery["query3"]="select+first_name,uid+from+user+where+uid+in+(select+uid+from+%23query2)";

    	$fql_multiquery_url = 'https://graph.facebook.com/'
       . 'fql?q={"query1":"'.$multiQuery['query1'].'",'
       .'"query2":"'.$multiQuery['query2'].'",'
       . '"query3":"'.$multiQuery['query3'].'"}'
       . '&access_token=' . $access_token;
      $fql_query_result = @file_get_contents($fql_multiquery_url);
      if ($fql_query_result === FALSE) {
        $this->handleException ("Cannot access the url");
      }
      $fql_query_result = preg_replace('/([^\\\])":([0-9]{10,})(,|})/', '$1":"$2"$3', $fql_query_result);
      $fql_query_obj = json_decode($fql_query_result, true);
      
      return $fql_query_obj['data'];    
    }

    public function handleException($e) {
        $this->session->sess_destroy();
        header("Location: ".base_url()."?showLogin=true");
    }

    public function getEventMetadata($event_id) {
        $access_token = $this->getFBAccessToken();
        $multiQuery =  array();
        $multiQuery["query1"] = "select+eid,all_members_count,attending_count,declined_count,description,has_profile_pic,location,name,pic_big,start_time,unsure_count,venue+from+event+WHERE+eid+={$event_id}";
        $fql_multiquery_url = 'https://graph.facebook.com/'
        . 'fql?q={"query1":"'.$multiQuery['query1'].'"}'
        . '&access_token=' . $access_token;
        $fql_query_result = @file_get_contents($fql_multiquery_url);
        if ($fql_query_result === FALSE) {
          $this->handleException ("Cannot access the url");
        }
        $fql_query_result = preg_replace('/([^\\\])":([0-9]{10,})(,|})/', '$1":"$2"$3', $fql_query_result);
        $fql_query_obj = json_decode($fql_query_result, true);        
        return $fql_query_obj['data'];
    }

    public function getVenueDetails($venueId) {
        $this->facebook->setAccessToken($this->getFBAccessToken());
        return $this->facebook->api("{$venueId}");
    }

    public function getAttendingMembers($eventId) {
        $this->facebook->setAccessToken($this->getFBAccessToken());
        return $this->facebook->api("{$eventId}/attending");      
    }

    public function getDeclinedMembers($eventId) {
        $this->facebook->setAccessToken($this->getFBAccessToken());
        return $this->facebook->api("{$eventId}/declined");      
    }

    public function postFeedToEvent($eventId){
        $this->facebook->setAccessToken($this->getFBAccessToken());
        $status = $this->facebook->api("{$eventId}/feed",'post',array('message'=>$_REQUEST['message']));
    }

    public function getEventPosts($event_id) {
        $this->facebook->setAccessToken($this->getFBAccessToken());
        return $this->facebook->api("{$event_id}/feed");
    }

    public function getFriendsEvents($pageNo=2) {
    	$start = ($pageNo-2)*4; 
    	$limit = 4;
    	
      $access_token = $this->getFBAccessToken();
    	$multiQuery =  array();
    	$multiQuery["query1"] = "select+eid,all_members_count,attending_count,declined_count,description,has_profile_pic,location,name,pic_big,start_time,unsure_count+from+event+WHERE+eid+in+(select+eid+from+event_member+where+uid+in+(SELECT+uid+FROM+user+WHERE+uid+IN+(SELECT+uid2+FROM+friend+WHERE+uid1=me()))+and+start_time+>=+'".date('Y-m-d')."'+order+by+start_time+asc)+limit+{$start},{$limit}";
      $multiQuery["query2"]= "select+eid,rsvp_status,uid+from+event_member+where+eid+in+(select+eid+from+%23query1)+and+rsvp_status='attending'";
      $multiQuery["query3"]= "select+first_name,uid+from+user+where+uid+in+(select+uid+from+%23query2)";
    	
    	$fql_multiquery_url = 'https://graph.facebook.com/'
   		 . 'fql?q={"query1":"'.$multiQuery['query1'].'",'
   		 .'"query2":"'.$multiQuery['query2'].'",'
   		 . '"query3":"'.$multiQuery['query3'].'"}'
   		 . '&access_token=' . $access_token;
  		$fql_query_result = @file_get_contents($fql_multiquery_url);
      if ($fql_query_result === FALSE) {
        $this->handleException ("Cannot access the url");
      }
      $fql_query_result = preg_replace('/([^\\\])":([0-9]{10,})(,|})/', '$1":"$2"$3', $fql_query_result);
  		$fql_query_obj = json_decode($fql_query_result, true);
  		
  		return $fql_query_obj['data'];    
    }

    public function getExtendedAccessToken($access_token) {
        $url = "https://graph.facebook.com/oauth/access_token?grant_type=fb_exchange_token&client_id=".$this->config->item('fb_app_id')."&client_secret=".$this->config->item('fb_app_secret')."&fb_exchange_token=".$access_token;  
        parse_str(file_get_contents($url), $data);
        return $data['access_token'];        
    }

    public function getFBAccessToken() {
        $access_token = $this->session->userdata('user_access_token');
        if(empty($access_token)) {
           if(isset($_SESSION['fb_'.$this->config->item('fb_app_id').'_access_token'])) {
              $access_token = $_SESSION['fb_'.$this->config->item('fb_app_id').'_access_token'];               
           }else{
              $access_token = $this->session->userdata('fb_access_token');
           }
           
           $this->session->set_userdata('user_access_token', $access_token);
        }

        return $access_token;
    }

    public function getLikePageEvents($pageNo=2) {
        $start = ($pageNo-2)*4;
        $limit = 4;

        $access_token = $this->getFBAccessToken();
        
        $multiQuery["query1"] = "select+eid,all_members_count,attending_count,declined_count,description,has_profile_pic,location,name,pic_big,start_time,unsure_count+from+event+WHERE+eid+in+(select+eid+from+event_member+where+uid+in+(SELECT+page_id+from+page_fan+where+uid=me())+and+start_time+>=+'".date('Y-m-d')."'+order+by+start_time+asc)+limit+{$start},{$limit}";
        $multiQuery["query2"]= "select+eid,rsvp_status,uid+from+event_member+where+eid+in+(select+eid+from+%23query1)+and+rsvp_status='attending'";
        $multiQuery["query3"]= "select+first_name,uid+from+user+where+uid+in+(select+uid+from+%23query2)";
        
        $fql_multiquery_url = 'https://graph.facebook.com/'
         . 'fql?q={"query1":"'.$multiQuery['query1'].'",'
         .'"query2":"'.$multiQuery['query2'].'",'
         . '"query3":"'.$multiQuery['query3'].'"}'
         . '&access_token=' . $access_token;
        $fql_query_result = @file_get_contents($fql_multiquery_url);
        if ($fql_query_result === FALSE) {
           $this->handleException ("Cannot access the url");
        }
        $fql_query_result = preg_replace('/([^\\\])":([0-9]{10,})(,|})/', '$1":"$2"$3', $fql_query_result);
        $fql_query_obj = json_decode($fql_query_result, true);
        return $fql_query_obj['data'];    
    } 
}

?>