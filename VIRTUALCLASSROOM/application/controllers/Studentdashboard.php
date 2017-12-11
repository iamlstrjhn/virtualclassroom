<?php


class Studentdashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
	}

	public function index () {
		if ($this->session->userdata('flag')) {
			$this->load->view('dashboard_student/header');
			$this->load->view('dashboard_student/dashboard_menu');
			$this->load->view('dashboard_student/footer');
		}
		else {
			redirect('Studentlogin');
		}
	
	}

}