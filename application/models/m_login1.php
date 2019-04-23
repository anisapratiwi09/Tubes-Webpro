<?php 

class m_login1 extends CI_Model{ 
 	function cek_login1($table,$where){  
 		return $this->db->get_where($table,$where);
 	} 
 
}
?>