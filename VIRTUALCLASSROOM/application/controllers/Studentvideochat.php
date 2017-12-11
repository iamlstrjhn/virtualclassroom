<?php


class Studentvideochat extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
	}

	public function index () {
		if ($this->session->userdata('flag')) {
			$this->load->view('dashboard_student/header');
			$this->load->view('dashboard_student/videochat');
			$this->load->view('dashboard_student/footer');
		}

		else{
			redirect('Studentlogin');
		}
	}

}