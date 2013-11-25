<?php

class Profile extends CI_Controller {
	
	public function index() {
		date_default_timezone_set('EST');
		$this->load->library('smartylib');
		$this->load->model('user');
		$this->load->database();

		$userData = $this->session->all_userdata();
		if(!isset($userData['id'])) {
			header("Location: ".base_url());
		}

		$data = array(
            'base_url' => base_url(),
            'fb_app_id' => $this->config->item('fb_app_id'),
            'logged_in_user_id' => $userData['id']            
        );
		$data = array_merge($data,$userData);
		$userLastName = explode(" ", $userData['user_name']);
		$data['lastname'] = $userLastName[0];

		/* get user meta */

		$userMeta = $this->user->getUserMetaInfo($userData['id']);
		$data = array_merge($data,$userMeta);

		$filterCat = 'user';
		if(isset($_REQUEST['cat'])){
			$filterCat = $_REQUEST['cat'];
		}

		$pageNo = 2;
        if(isset($_REQUEST['pageNo'])) {
        	$pageNo = (int)$_REQUEST['pageNo']+1;
        }

		/* get user events */
		if(isset($userData['fb_user_id'])){
			switch ($filterCat) {
				case 'friends':
					$fbEvents = $this->user->getFriendsEvents($pageNo);
					break;
				case 'user':
					$fbEvents = $this->user->getUserEvents($pageNo);
					break;	
				case 'myevents':
					$fbEvents = $this->user->getLikePageEvents($pageNo);
					break;				
			}	
		}			
        
		$event_members = array();
		for($i=0;$i<count($fbEvents['1']['fql_result_set']);$i++) {
			$event_members[$fbEvents['1']['fql_result_set'][$i]['eid']][]['uid'] = $fbEvents['1']['fql_result_set'][$i]['uid'];
		}

		$userNames = array();
		for($i=0;$i<count($fbEvents['2']['fql_result_set']);$i++) {
			$userNames[$fbEvents['2']['fql_result_set'][$i]['uid']]['name'] = $fbEvents['2']['fql_result_set'][$i]['first_name'];
		}

		$this->smartylib->clearCache('profile.tpl');
		$this->smartylib->clearCache('events.tpl');
		$this->smartylib->assign('eventList', $fbEvents['0']['fql_result_set']);
		$this->smartylib->assign('eventMembers', $event_members);
		$this->smartylib->assign('userNames', $userNames);
		$this->smartylib->assign('templateData', $data);
		$this->smartylib->assign('pageNo', $pageNo);
		if(isset($_REQUEST['cat'])) {
			$this->smartylib->assign('filter_cat', $_REQUEST['cat']);	
		}else{
			$this->smartylib->assign('filter_cat', "user");
		}
		
		if(isset($_REQUEST['filterContent'])) {
			$this->smartylib->display('events.tpl');	
		}else{
			$this->smartylib->display('profile.tpl');
		}
		
	}

	
	public function user() {

		$query_string = explode("/",uri_string());	
		$this->load->library('smartylib');
		$this->load->model('user');

		$userData = $this->session->all_userdata();
		if(!isset($userData['id'])) {
			header("Location: ".base_url()."?showLogin=true");
		}
		$data = array(
            'base_url' => base_url(),
            'fb_app_id' => $this->config->item('fb_app_id'),
            'logged_in_user_id' => $userData['id']            
        );

        $userInfo = $this->user->getUserInfo($query_string[2],true);
        $userInfo['user_profile_pic'] = $userInfo['profile_pic'];
		$data = array_merge($data,$userInfo);
		$userLastName = explode(" ", $userData['user_name']);
		$data['lastname'] = $userLastName[0];
		$this->smartylib->assign('templateData', $data);
		if(isset($data['id'])) {
			$this->smartylib->clearCache('profile.tpl');
			$this->smartylib->display('profile.tpl');	
		} else {
			$this->smartylib->display('profilenotfound.tpl');	
		}
		
	}

	public function inviteFriends() {
		$this->load->library('smartylib');
		$this->load->model('user');
		$query_string = explode("/",uri_string());
        $pageNo = 2;
        if(isset($query_string[2])) {
        	$pageNo = (int)$query_string[2]+1;
        }

		$userData = $this->session->all_userdata();
		if(!isset($userData['id'])) {
			header("Location: ".base_url()."?showLogin=true");
		}

		$friendsList = $this->user->getFacebookFriends($pageNo);
		$data = array(
            'base_url' => base_url(),
            'fb_app_id' => $this->config->item('fb_app_id'),
            'logged_in_user_id' => $userData['id']            
        );
        
        $data = array_merge($data,$userData);
        $userLastName = explode(" ", $userData['user_name']);
		$data['lastname'] = $userLastName[0];
		$this->smartylib->assign('friendsList', $friendsList);
		$this->smartylib->assign('templateData', $data);
		$this->smartylib->assign('pageNo', $pageNo);
		$this->smartylib->clearCache('invite_friends.tpl');
		$this->smartylib->display('invite_friends.tpl');
	}

	public function searchFriends() {
		$this->load->library('smartylib');
		$this->load->model('user');
		$query_string = explode("/",uri_string());
		$friendsList = $this->user->searchFacebookFriends($query_string[2]);
		$data = array(
            'base_url' => base_url()
        );
        $this->smartylib->assign('templateData', $data);
		$this->smartylib->assign('friendsList', $friendsList);
		$this->smartylib->clearCache('friendslist.tpl');
		ob_start();
		$this->smartylib->display('friendslist.tpl');
		$htmlContent = ob_get_contents();
		ob_clean();
		echo json_encode(array('html'=>$htmlContent));
	}
}

?>