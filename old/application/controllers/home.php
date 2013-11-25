<?php
class Home extends CI_Controller {

	public function index()
	{
		$this->load->library('smartylib');
		$userData = $this->session->all_userdata();		
		$data = array(
            'base_url' => base_url(),
            'fb_app_id' => $this->config->item('fb_app_id')            
        );
		if(isset($userData['id'])) {
			$userLastName = explode(" ", $userData['user_name']);			
			$data = array_merge($data,array('logged_in_user_id' => $userData['id'],
            'profile_pic' => $userData['profile_pic'],
            'username' => $userData['user_name'],'lastname'=>$userLastName[0]));
            header("Location:".base_url()."profile");
		}else{
			$data = array_merge($data,array('logged_in_user_id' => "",'profile_pic' => "",'username' => ""));					
		}
		$this->smartylib->assign('templateData', $data);
		$this->smartylib->clearCache('index.tpl');
		$this->smartylib->display('index.tpl');
	}
}
?>