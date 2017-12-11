<?php 

class Schoolworks_model extends CI_Model {

	function __construct(){
		$this->load->database();
	}


	public function getcontent () {
		return $this->db
		->join('table_faculty_load','SchoolWorksUploader=FacultyLoadID')
		->join('table_subjects','table_faculty_load.SubjectsID=table_subjects.SubjectsID')
		->order_by('SchoolWorksDate','desc')
		->get('table_post_schoolworks')->result_array();
	}


	public function create_content($data) {
		return $this->db->insert('table_post_schoolworks', $data);
	}

}