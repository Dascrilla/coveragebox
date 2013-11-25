<?php
class Account extends CI_Controller {
	
	public function checkUserExisting()
	{
		$this->load->library('smartylib');
		$this->load->database();
		$query_string = explode("/",uri_string());		
		$query = $this->db->get_where('evt_user', array('fb_user_id' => $query_string[2]));
		
		$status = 'NotExisting';
		foreach ($query->result() as $row) {
			$userDetails = $row;
			$this->load->model('user');			
			$userDetails->fb_access_token = $this->user->getExtendedAccessToken($query_string[3]);
			unset($userDetails->user_pass);			
			$this->session->set_userdata((array)$userDetails);
    		$status = 'Existing';
		}
		
		echo json_encode(array('status' => $status));
	}

	public function emailRegistration() {
		$this->load->library('smartylib');
		$this->load->database();
		$queryParams = explode("/", $_REQUEST['urlString']);
		if($queryParams[3] == 'Existing User') {
			$query = $this->db->get_where('evt_user', array('user_email' => $queryParams[1]
			,'user_pass'=>md5($queryParams[2])));			
			$status = 'failure';
			foreach ($query->result() as $row) {
				$userDetails = $row;
				unset($userDetails->user_pass);
				$this->session->set_userdata((array)$userDetails);
	    		$status = 'success';
			}
		} else {
			$data = array(
			   'id' => '' ,
			   'user_name' => $queryParams[0],
			   'user_email' => $queryParams[1],
			   'user_pass' => md5($queryParams[2]),
			   'fb_user_id' => '',
			   'fb_access_token' => '',
			   'user_registered' => date( 'Y-m-d H:i:s'),
			   'user_status' => 1,
			   'profile_pic' => "http://eventtopicdev.com/assets/img/default-user-icon-profile.png"
			);
			$this->db->insert('evt_user', $data);
			unset($data->user_pass);
			$data['id'] = $this->db->insert_id();
			$this->session->set_userdata((array)$data);	
			$status = 'success';
		}

		echo json_encode(array('status' => $status));
	}

	public function usermeta() {
		$this->load->database();
		$userData = $this->session->all_userdata();	

		$fb_config = array(
		    'appId'  => $this->config->item('fb_app_id'),
		    'secret' => $this->config->item('fb_app_secret')
		);
		$this->load->library('facebook', $fb_config);
		$this->load->model('user');

		$user_details = $this->facebook->api('me',array('fields'=>'id,name,link,location,first_name,last_name,hometown'));
		$userInfo = $this->user->getUserIdFromFBID($user_details['id']);
		$location = "";
		if(isset($user_details['location']['name'])) {
			$location = $user_details['location']['name'];
		}else if(isset($user_details['hometown']['name'])) {
			$location = $user_details['hometown']['name'];
		}
		$data = array(
		   'user_id' => $userInfo['id'] ,
		   'profile_url' => $user_details['link'],
		   'location' => $location,
		   'first_name' => $user_details['first_name'],
		   'last_name' => $user_details['last_name']		   
		);

		$this->db->insert('evt_user_meta', $data);
		
		header('Location: '.base_url()."profile");		
	}

	public function renderFbRegistration() {
		$this->load->library('smartylib');
		$data = array(
            'base_url' => base_url(),
            'fb_app_id' => $this->config->item('fb_app_id')            
        );	
        $this->smartylib->assign('templateData', $data);
		$this->smartylib->display('fb_register.tpl');
	}

	public function registerFbUser()
	{
		$this->load->library('smartylib');
		$this->load->database();
		$fb_config = array(
		    'appId'  => $this->config->item('fb_app_id'),
		    'secret' => $this->config->item('fb_app_secret')
		);
		$this->load->library('facebook', $fb_config);
		$response = $this->parse_signed_request($_REQUEST['signed_request'],$this->config->item('fb_app_secret'));
		$scope = "&scope=user_photos,friends_events,publish_stream,user_events,user_location,user_hometown,user_online_presence,friends_online_presence,read_stream";   
		$auth_url = "http://www.facebook.com/dialog/oauth?client_id=" . $fb_config['appId'] . "&redirect_uri=" .urlencode(base_url()."account/usermeta").$scope; 
		$data = array(
		   'id' => '' ,
		   'user_name' => $response['registration']['name'],
		   'user_email' => $response['registration']['email'],
		   'user_pass' => md5($response['user_id']),
		   'fb_user_id' => $response['user_id'],
		   'fb_access_token' => $response['oauth_token'],
		   'user_registered' => date( 'Y-m-d H:i:s'),
		   'user_status' => 1,
		   'profile_pic' => "http://graph.facebook.com/{$response['user_id']}/picture"
		);

		$this->db->insert('evt_user', $data);
		unset($data->user_pass);
		$data['id'] = $this->db->insert_id();
		$this->session->set_userdata((array)$data);
		header('Location: '.$auth_url);		
	}

	public function logout() {
		$this->load->library('smartylib');
		$this->smartylib->clearCache('index.tpl');
		$this->session->sess_destroy();
		echo json_encode(array('status' => "success"));
	}

	private function parse_signed_request($signed_request, $secret) {
		  list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

		  // decode the data
		  $sig = $this->base64_url_decode($encoded_sig);
		  $data = json_decode($this->base64_url_decode($payload), true);

		  if (strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
		    error_log('Unknown algorithm. Expected HMAC-SHA256');
		    return null;
		  }

		  // check sig
		  $expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
		  if ($sig !== $expected_sig) {
		    error_log('Bad Signed JSON signature!');
		    return null;
		  }

		  return $data;
	}

	private function base64_url_decode($input) {
    	return base64_decode(strtr($input, '-_', '+/'));
	}



}
?>