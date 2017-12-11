<?php


class Studentmessage extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
	}

	public function index () {
		if ($this->session->userdata('flag')) {
			$this->load->view('dashboard_student/header');
			$this->load->view('dashboard_student/message');
			$this->load->view('dashboard_student/footer');
		}
		else {
			redirect('Studentlogin');
		}
		
	}

}