<?php



class Announcement_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}


	public function get_announcement(){
		return $this->db

		->join('table_faculty','AnnouncementUploader=FacultyID','left')
		->get('table_announcements')->result_array();
	}


	public function insert_announcement($data){


	$this->db->insert('table_announcements',$data);

	}

	public function edit_announcement($id,$data){
		$this->db->where('AnnouncementID',$id)->update('table_announcements',$data);
    	return true;
	}

}

