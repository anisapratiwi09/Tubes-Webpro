<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');   
    }

    public function index()
    {
        $this->load->view("register");    
    }

    public function new()
    {
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');
        $username = $this->input->post('username');

        $user = array(
            'nama' => $nama, 
            'password' => password_hash($password, PASSWORD_BCRYPT), 
            'username'=> $username,
        );

        $this->User->new($user);
        header('Location: '. base_url('/berandaa'));
    }
}
        
        
                            