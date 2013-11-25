<?php

class Event extends CI_Controller {
	public function detail() {
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
		$query_string = explode("/",uri_string());	
		$eventDetails = $this->user->getEventMetadata($query_string[2]);
		$eventPostDetails = $this->user->getEventPosts($query_string[2]);
		$venueDetails = $this->user->getVenueDetails($eventDetails[0]['fql_result_set'][0]['venue']['id']);
		$attendingMembers = $this->user->getAttendingMembers($query_string[2]);
		$this->smartylib->clearCache('event_details.tpl');
		$this->smartylib->assign('templateData', $data);
		$this->smartylib->assign('cur_event_id', $query_string[2]);
		$this->smartylib->assign('eventDetails', $eventDetails[0]['fql_result_set'][0]);
		$this->smartylib->assign('eventPostDetails', $eventPostDetails['data']);
		$this->smartylib->assign('venueDetails', $venueDetails);
		$this->smartylib->assign('attendingMembers', $attendingMembers['data']);
		$this->smartylib->display('event_details.tpl');
	}

	public function postFeed() {
		$this->load->model('user');
		$query_string = explode("/",uri_string());	
		$this->user->postFeedToEvent($query_string[2]); 	
	}

}