<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coverage extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('cookie');
		$this->load->library('tank_auth');
	}


	function get_listing(){
		if ($this->tank_auth->is_logged_in()) {
				$user_id = $this->tank_auth->get_user_id();
				$listing = $this->db->get_where('listings', array('user_id =' => $user_id));
				$data['listing_list'] = '';
				if($listing->num_rows() > 0) {
					foreach ($listing->result() as $row) {
						$record[] = $row;
					}
					$data['listing_list'] = $record;
				}
				//$this->load->view('header');
				$this->load->view('/coverage/get_listing', $data);
				//$this->load->view('footer');
		}
	}


	function load_listing($listing_id = null){
		
		if ($this->tank_auth->is_logged_in()) {
			$user_id = $this->tank_auth->get_user_id();
			$data = array();
			if($listing_id){
				$listing = array();

				$l = $this->db->get_where('listings',array('id =' => $listing_id));		   
				if($l->num_rows() > 0) {
					$data['listing_name'] = $l->result();
				}

				/*$this->load->library('pagination');
				$config['base_url'] = base_url() . 'coverage/search/'.$listing_id.'/';
				$config['total_rows'] = intval($this->db->get_where('coverages', array('listing_id =' => $listing_id))-> num_rows);
				$config['per_page'] = 5;
				$this->pagination->initialize($config);
				$page = ($this->uri->segment(4))? $this->uri->segment(4) : 0;*/
			
				$listing = $this->db->get_where('coverages', array('listing_id =' => $listing_id));
				$data['listing_id'] = $listing_id;
				$data['listing'] = '';
				if($listing->num_rows() > 0) {
					foreach ($listing->result() as $row) {
						$record[] = $row;
					}
					$data['listing'] = $record;
				}
				//$this->pagination->uri_segment = 4;
				//$data['pagination'] = $this->pagination->create_links();
			}
				if(!isset($_POST['requestType'])){
					//$this->load->view('header');
					//$this->load->view('/coverage/load_listing', $data);
					//$this->load->view('footer');
					return $data;
				} else {
					$this->load->view('/coverage/load_listing', $data);
				}
		}
	}

	public function search($listing_id = null)
	{
		//if (!$this->tank_auth->is_logged_in()) {
			//redirect('/auth/login/');
		//} else {
		if($listing_id) { 
			$data = $this->load_listing($listing_id);
			$this->load->view('header');
			$this->load->view('/coverage/search', $data);
			$this->load->view('footer');
				

			} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$data['role']		= $this->tank_auth->get_role();

			
			$h = $this->db->get('headers');
			$header_data['header_list'] = '';
			if($h->num_rows() > 0) {
				foreach ($h->result() as $header_row) {
					$header_record[] = $header_row;
				}
				$header_data['header_list'] = $header_record;
			}

			$mult_data = array 
				('var2' => $header_data['header_list'] );

			$this->load->view('header');
			$this->load->view('/coverage/search', $mult_data);
			$this->load->view('footer');
		//}	
		}
	}

	function header_search(){
		$this->load->view('header');
		$this->load->view('/coverage/search', $header_data);
		$this->load->view('footer');
	}

	function new_coverage(){
		$response = array();
		list($link,$title,$publisher,$author,$publisher_date) = explode('&', $_POST['data']);
			$data = array(
				'link'				=> $link,
				'title'				=> $title,			
				'publisher'			=> $publisher,
				'author'			=> $author,
				'publisher_date'    => $publisher_date,
			);
			
			if($this->db->insert('coverages',$data)){
				$response['result'] = 'S';
			}else{
				$response['result'] = 'F';
			}
			echo json_encode($response);
	}

	function save(){
		$response = array();
		if ($this->tank_auth->is_logged_in()) {
			$data = array();
			if(isset($_POST['raw_data'])){
				
				foreach($_POST['raw_data'] as $row){
					$santliser = str_replace("'",'',$row['raw_web_data']);
					$json = json_decode($santliser);
					$error = json_last_error();
					if($json != '') {
						$data = array(
							'link'				=> isset($json->url)?urldecode($json->url):'',
							'title'				=> isset($json->titleNoFormatting)?$json->titleNoFormatting:'',
							'content'			=> isset($json->content)?$json->content:'',
							'type'				=>  $row['type'],
							'listing_id'		=>  $row['listing_id'],
							'publisher'			=>  isset($json->publisher)?$json->publisher:$row['publisher'],
							'author'			=>  isset($row['author'])?$row['author']:'',
							'publisher_date'    =>  isset($json->publisher_date)?date('Y-m-d h:m:s',strtotime($json->publisher_date)):date('Y-m-d'),
							'raw_data'  =>  $row['raw_web_data']
						);
					} else {
						$data = array(
							'link'				=> $row['url'],
							'title'				=> isset($row['title'])?$row['title']:'',
							'content'			=> isset($row['content'])?$row['content']:'',
							'type'				=>  $row['type'],
							'listing_id'		=>  $row['listing_id'],
							'publisher'			=>  isset($row['publisher'])?$row['publisher']:'',
							'author'			=>  isset($row['author'])?$row['author']:'',
							'publisher_date'    =>  isset($row['publisher_date'])?$row['publisher_date']:date('Y-m-d'),
							'raw_data'  =>  $row['raw_web_data']
						);
					}
					
					
					
					if($data){
						if($this->db->insert('coverages',$data)){
							$response['result'] = 'S';
						}else{
							$response['message'] = 'Please try again.Error occured while saving records.';
							$response['result'] = 'F';
						}
					}else{
							$response['message'] = 'Please drag and drop at least one entry.';
							$response['result'] = 'F';
					}				
				}
			}
			if(isset($_POST['new_entry_data'])){
				foreach($_POST['new_entry_data'] as $row){
					parse_str($row, $output);
					$data = array(
							'type'				=> 'custom',
							'listing_id'		=> $_POST['listing_id'],
							'link'				=> $output['link'],
							'title'				=> $output['title'],			
							'publisher'			=> $output['publication'],
							'author'			=> $output['author'],
							'publisher_date'    => $output['publisher_date']
					);
					if($data){
						if($this->db->insert('coverages',$data)){
							$response['result'] = 'S';
						}else{
							$response['message'] = 'Please try again.Error occured while saving records.';
							$response['result'] = 'F';
						}
					}else{
							$response['message'] = 'Please drag and drop at least one entry.';
							$response['result'] = 'F';
					}			
				}
			}
			
		}else{
			$response['result'] = 'F';
			$response['message'] = 'You must be logged in to perform that action.';
		}

		echo json_encode($response);
		//redirect('/coverage/search');
	}
		
	function add_new_coverage_listing(){
			$response = array();
			if (!$this->tank_auth->is_logged_in()) {
				$response['result'] = 'F';
				$response['message'] = 'You must be logged in to perform that action.';
				//redirect('/auth/login/');
			} else {
				$data['user_id']	= $this->tank_auth->get_user_id();
				$data1 =array('name' => $_POST['name'], 'user_id' => $data['user_id'], 'status' => '1', 'created' => date('Y-m-d H:i:s'));
				
				if($this->db->insert('listings',$data1)){
					$response['result'] = 'S';
					$response['name'] = $_POST['name'];
					$response['id'] = $this->db->insert_id();
					//echo base_url().'coverage/search';			
				}else{
					//echo "Error while saving the data";
				}
			}
			echo json_encode($response);
	}

	function edit_coverage_data() {											// Edit Coverage
		$response = array();
		if(isset($_POST['new_entry_data1'])){
			foreach($_POST['new_entry_data1'] as $row){
				
				$data = array(
						'publisher'			=> $row['publisher'],
						'author'			=> $row['author'],
						'title'				=> $row['title'],			
						'link'				=> $row['link'],
						'publisher_date'    => $row['publisher_date']
				);
				
				$this->db->where('id', $_POST['coverage_id']);
				if($this->db->update('coverages',$data)){
					$response['result'] = 'S';
				}else{
					$response['result'] = 'F';
				}
			}
		}
	}

	function delete_coverage_data() {											// Delete Coverage
		$response = array();
		$id = $_POST['coverage_id'];
		$del = $this->db->delete('coverages', array('id =' => $id));						
		if($del){
			$response['result'] = 'S';
		}else {
			$response['result'] = 'F';
		}
	}

	function view_listing($id = null){
		$coverage_listing = array();
		if($id){
			$coverage_list = array();
			
			$coverage_listing['listing_id'] = $id;
			$qr = $this->db->get_where('coverages', array('listing_id =' => $id));
			if($qr->num_rows() > 0) {
				foreach ($qr->result() as $row) {
					$record[] = $row;
				}
				$coverage_listing['coverage_list'] = $record;
			}
		
		}
		$this->load->view('header');
		$this->load->view('/coverage/view_listing', $coverage_listing);
		$this->load->view('footer');
	}

		
	function save_listing_header() {
		$this->load->database();
		$header_id = explode('|',substr($_POST['header_id'],0,-1));

		foreach($header_id as $header_row){
			$data2 =array('listing_id' => $_POST['listing_id'] ,'header_id'=> $header_row);
			if($this->db->insert('listing_headers',$data2)){
				echo base_url().'coverage/search';			
			}else{
				echo "Error while saving the data";
			}
		 }
	}
	
	function edit_listing()	{
		$id = $_POST['id'];
		$el = $this->db->get_where('listings', array('id =' => $id));			//  Edit Listings For User Listing
		$edit_listing_data = "";
		if($el->num_rows() > 0) {
			$edit_listing_data = $el->result();
			echo $edit_listing_data[0]->name;
		}
	}

	function delete_listing($id) {			                       //  Delete Listings			
		$id = $_POST['listing_id'];
		$del = $this->db->delete('listings', array('id =' => $id));			
		$del_coverage_listing = $this->db->delete('coverages', array('listing_id =' => $id));	
		if($del_coverage_listing){
			$response['result'] = 'S';
		}else {
			$response['result'] = 'F';
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
