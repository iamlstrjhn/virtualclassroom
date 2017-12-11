<?php


class Faculty_model extends CI_Model
{
	
	public function register_user() {
		$this->load->database();
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		$this->db->insert('table_user',$data);
		$x = $this->db->insert_id();

		$data = array(
			'Firstname' => $this->input->post('firstname'),
			'Lastname' => $this->input->post('lastname'),
			'Email' => $this->input->post('email'),
			'UserID'=>$x
		);
		$this->db->insert('table_faculty', $data);
		// echo "string";
	}


	public function login_user($data) {
		$this->load->database();
		$result = $this->db->where($data)
				 ->join('table_user','table_faculty.UserID=table_user.UserID')
				 ->get('table_faculty');
		 if ($result->num_rows()==1) {

		 	var_dump($result);
		 	$result = $result->result_array();
		 	return $result[0];
		 } else {
		 	return false;
		 }
	}


}