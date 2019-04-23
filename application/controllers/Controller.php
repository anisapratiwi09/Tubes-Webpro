<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {
	public function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('m_berandaa');
		$this->load->model('m_login');
		$this->load->model('User');
	}
	public function ubah(){
        $this->load->view('ubah');
    }
	public function login(){
        $this->load->view('login');
        $this->form_validation->set_rules('username','Username','required|trim');
	}
	public function login2(){
        $this->load->view('login2');
    }
	public function register(){
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('ponsel','Ponsel','required|trim|valid_ponsel');
		if ($this->form_validation->run() == false){
			$this->load->view('register');
		} else {
			echo "data berhasil";
		}
	}
	public function notifikasi(){
		$this->load->view('notifikasi');
	}
	public function berandaa(){
		$result['data'] = $this->m_berandaa->showtweet();
		$this->load->view('berandaa',$result);
		if ($this->input->post('btntweet')){
			$tweet = $this->input->post('tweet');
			$this->m_berandaa->savetweet($tweet);
		}
	}
	public function profile(){
		$this->load->view('profile');
	}
	public function edit_profile(){
		$this->load->view('edit_profile');
	}
	function aksi_login(){
		$username = $this->input->post('username');
  		$password = $this->input->post('password');
  		$where = array(
   			'username' => $username,
   			'password' => $password
   			);
  		$cek = $this->m_login->cek_login("user",$where)->num_rows();
  		if(empty($cek)){
    		echo "Username dan password salah !";
   		}else{   
   			$data_session = array(
    			'nama' => $username,
    			'status' => "Login"
 		   		);
 
   			$this->session->set_userdata($data_session);
 
   			redirect(base_url("user"));
  		}
 	}
 	function aksi_login1(){
		$username = $this->input->post('username');
  		$password = $this->input->post('password');
  		$where = array(
   			'username' => $username,
   			'password' => $password
   			);
  		$cek = $this->m_login1->cek_login1("user1",$where)->num_rows();
  		if(empty($cek)){
    		echo "Username dan password salah !";
   		}else{   
   			$data_session = array(
    			'nama' => $username,
    			'status' => "Login"
 		   		);
 
   			$this->session->set_userdata($data_session);
 
   			redirect(base_url("user1"));
  		}
 	}

}