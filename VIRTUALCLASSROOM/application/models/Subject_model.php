<?php


	class Subject_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function get_subject() {
		
		return $this->db->get('table_subjects')->result_array();

	}

	public function create_load(){

		$data = array(
				'FacultyID'=>$this->session->userdata['session']['FacultyID'],
				'SubjectsID' => $this->input->post('subject'),
				'timeStart' => $this->input->post('timestart'),
				'timeEnd' => $this->input->post('timeend'),
				'dayCode' => $this->input->post('daycode')
				);

		return $this->db->insert('table_faculty_load', $data);	
		}
		
	public function get_load($data){
		
		return $this->db->join('table_subjects','table_faculty_load.SubjectsID=table_subjects.SubjectsID')
			 ->get('table_faculty_load')->result_array();
		}



	public function get_student_load($data){
		return $this->db->where('StudentID',$data)

						->join('table_faculty_load','table_student_load.FacultyLoadID=table_faculty_load.FacultyLoadID')
						->join('table_subjects','table_faculty_load.SubjectsID=table_subjects.SubjectsID')
						->join('table_faculty','table_faculty_load.FacultyID=table_faculty.FacultyID')

			 			->get('table_student_load')->result_array();
		}

	public function get_student(){

		/*$data = array('' => , );*/
		return $this->db->order_by('Lastname','ASC')->get('table_student')->result_array();
	}
		

}