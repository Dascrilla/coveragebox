<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sample_content');
		$this->load->view('footer');
	}

	public function secure()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}else{
			redirect('/coverage/search/');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
