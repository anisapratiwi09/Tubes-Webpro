<?php 

class user extends CI_Controller{

	 function __construct(){
 	 	parent::__construct();
 
  		if($this->session->userdata('status') != "Login"){
   			redirect(base_url("login2"));
  		}
 	}

 	function index(){
 		$this->load->model('m_berandaa');
 		$result['data'] = $this->m_berandaa->showtweet();
		$this->load->view('berandaa',$result);
  		
 	}
}