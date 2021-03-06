<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employeer_dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

 	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']){
            redirect('login');
        }
    }
	public function index()
	{
		$this->load->model('employeer_dashboard_m');
		//if(isset($this->uri->segment(2)) &&$this->uri->segment(2) != NULL)
		if($this->uri->segment(2) != NULL)
		{
			$job_id = $this->uri->segment(2);
			$data['user_details'] = $this->employeer_dashboard_m->employeer_details($job_id);
			$data['posted_jobs'] = $this->employeer_dashboard_m->job_details($job_id);
		}
		else
		{
		if(isset($this->session->userdata['logged_in']) && $this->session->userdata['logged_in'] != NULL){
			$userdata = $this->session->userdata['logged_in'];
			$user_id = $userdata['user_id'];
		}
	
		$data['user_details'] = $this->employeer_dashboard_m->employeer_details($user_id);
		$data['posted_jobs'] = $this->employeer_dashboard_m->job_details($user_id);
	
		
	}
		$data['page_nm'] = "employeer_dashboard";
		$this->load->view('employeer_dashboard',$data);
	}

	public function edit_resume_file()
	{
		$this->load->model('dashboard_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'pdf|docx|doc';
			$config['file_name'] = rand(999,99999).$_FILES['resume_file']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('resume_file')){
				$uploadData = $this->upload->data();
				$resume_file = $uploadData['file_name'];
			}else{
				$resume_file = '';
			}

			$posted_date = time();

			$records = array(
			'resume_file' => $resume_file,
			'date_posted' => $posted_date,	
		);
		$edit_resume_data = $this->dashboard_m->edit_resume_file($user_id,$records);
		if($edit_resume_data)
		{
			$this->session->set_flashdata("success", "Success , Your Resume Has Been Updated Successfully!");
			redirect('dashboard');
		}
		else
		{
			$this->session->set_flashdata("failed", "Something Went Wrong!");
			redirect('dashboard');
		}
	}
}
?>