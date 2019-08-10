<?php


class Teacherprofile extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('Subject_model');
        $this->load->model('Profile_model');
	}

	public function index () {
		if ($this->session->userdata('session')) {
			$data['setprofile'] =$this->Profile_model->getprofile();
			$data['addstud'] = $this->Subject_model->get_student();
			$this->load->view('dashboard_teacher/header');
			$this->load->view('dashboard_teacher/profile',$data);
			$this->load->view('dashboard_teacher/footer',$data);
		}
		else{
			$this->load->view('Login/login');
		}
	}


	public function update_profile(){
			$this->form_validation->set_rules('title', 'AnnouncementTitle', 'required');
			$this->form_validation->set_rules('content', 'AnnouncementContent', 'required');
			$this->form_validation->set_rules('sched', 'AnnouncementSched', 'required');

			if($this->form_validation->run()===FALSE){
				$this->load->model('Announcement_model');
				$data['announcement'] = $this->Announcement_model->get_announcement();
				redirect('Teacherschedules', $data);
			}

			else {
				$data = array(
					'AnnouncementTitle'=>$this->input->post('title'),
					'AnnouncementContent'=>$this->input->post('content'),
					'AnnouncementSched'=>$this->input->post('sched')
				);
				$this->Announcement_model->edit_announcement($id,$data);
				redirect('Teacherschedules');
			
		}
	}



}