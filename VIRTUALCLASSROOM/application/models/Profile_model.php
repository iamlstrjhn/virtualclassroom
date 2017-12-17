<?php 

class Profile_model extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	public function getprofile(){
		return $this->db->get('table_student')->result_array();
	}

}