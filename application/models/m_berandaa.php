<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berandaa extends CI_Model {
	function showtweet(){
		$query = $this->db->query('select * from tweet');
		return $query->result();

	}
	function savetweet($tweet){
		$query = "insert into tweet values ('$tweet')";
		$this->db->query($query);
	}

}
?>