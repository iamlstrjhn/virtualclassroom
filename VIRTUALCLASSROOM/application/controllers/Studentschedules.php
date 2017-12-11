<?php


class Studentschedules extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
	}

	public function index () {
		if ($this->session->userdata('flag')) {
			$data['announcement'] = $this->Announcement_model->get_announcement();
			$this->load->view('dashboard_student/header');
			$this->load->view('dashboard_student/schedules', $data);
			$this->load->view('dashboard_student/footer');
		}
		else {
			redirect('Studentlogin');
		}
	}

}