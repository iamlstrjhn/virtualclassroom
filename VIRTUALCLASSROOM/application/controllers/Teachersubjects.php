<?php


class Teachersubjects extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('Subject_model');
	}

	public function index () {
		if ($this->session->userdata('session')) {
			$data['subjects'] = $this->Subject_model->get_subject();
			// var_dump($this->session->userdata('session'));
			$data['loads'] = $this->Subject_model->get_load(array('FacultyID'=>$this->session->userdata['session']['FacultyID']));
			$data['addstud'] = $this->Subject_model->get_student();
			$this->load->view('dashboard_teacher/header');
			$this->load->view('dashboard_teacher/subjects', $data);
			$this->load->view('dashboard_teacher/footer',$data);
		}
		else {
			$this->load->view('Login/login');
		}
		
	}


	public function add_load(){

			$this->form_validation->set_rules('daycode', 'dayCode', 'required');
			$this->form_validation->set_rules('timestart', 'timeStart', 'required');
			$this->form_validation->set_rules('timeend', 'timeEnd', 'required');

			if($this->form_validation==FALSE){
				$data['subjects'] = $this->Subject_model->get_subject();
				$data['loads'] = $this->Subject_model->get_load(array('FacultyID'=>$this->session->userdata['session']['id']));
				
				$this->load->view('dashboard_teacher/header');
				$this->load->view('dashboard_teacher/subjects', $data);
				$this->load->view('dashboard_teacher/footer',$data);

			} 
			else{
				$this->Subject_model->create_load();
				redirect('Teachersubjects',$data);
			}
		}
		

	public function view_students(){
		$data['addstud'] = $this->Subject_model->get_student();
		$this->load->view('dashboard_teacher/header');
		$this->load->view('dashboard_teacher/subject_view_students', $data);
		$this->load->view('dashboard_teacher/footer', $data);
	}



}