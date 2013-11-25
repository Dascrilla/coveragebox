<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coverages extends  CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
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
		$this->smartylib->display('user.tpl');
	}

	function save()
	{
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */