<?php


class Studentschoolworks extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->Model('Schoolworks_model');
        $this->load->model('Subject_model');
	}

	public function index () {
		if ($this->session->userdata('flag')) {
			$data['upload_data'] = $this->Schoolworks_model->getcontent();
			$this->load->view('dashboard_student/header',$data);
			$this->load->view('dashboard_student/schoolworks', $data);
			$this->load->view('dashboard_student/footer',$data);
		}
		else {
			redirect('Studentlogin');
		}
		
	}

}