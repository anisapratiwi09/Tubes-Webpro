<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class User extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }                   
    

    public function new($user){
        $this->db->insert('user', $user); 
    }

}
                        
    
                        