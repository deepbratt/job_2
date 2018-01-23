<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_resume extends CI_Controller {

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
        if(!$this->session->userdata['logged_in']['user_id']){
        	$this->session->set_flashdata("log", "You need to login to upload resume");
            redirect('login');
        }
    }

	public function index()
	{
		$data['page_nm'] = "post_resume";
		$this->load->view('post_resume');
	}

	public function fetch_data()
	{
		$this->load->model('post_resume_m');
		 if(isset($this->session->userdata['logged_in']) && $this->session->userdata['logged_in'] != NULL){
			$userdata = $this->session->userdata['logged_in'];
			$emp_id = $userdata['user_id'];
		 }
		$data['emp_details'] = $this->post_resume_m->fetch_emp_details($emp_id);
		$data['page_nm'] = "post_resume";
		$this->load->view('post_resume',$data);
	}
	public function edit_resume()
	{
		$this->load->model('post_resume_m');
		 if(isset($this->session->userdata['logged_in']) && $this->session->userdata['logged_in'] != NULL){
			$userdata = $this->session->userdata['logged_in'];
			$emp_id = $userdata['user_id'];
		 }
		$user_id = $emp_id;

		$job_title = $this->input->post('job_title');
		$company_name = $this->input->post('company_name');
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$education = $this->input->post('education');
		$max_salary = $this->input->post('max_salary');
		$travel_distance = $this->input->post('travel_distance');
		$relocate = $this->input->post('relocate');
		$post_type = $this->input->post('post_type');
		$skills_get = $this->input->post('skills');
		$all_skills = implode(",",$skills_get);
		$kichu = $this->post_resume_m->fetch_get_resume($user_id);
		if($kichu == NULL)
		{
			 $resume_file = '';
			
		}
		else
		{
			$resume_file = $kichu->resume_file;
		
		}

		if(!empty($_FILES['resume']['name'])){
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'pdf|docx|doc';
			$config['file_name'] = rand(999,99999).$_FILES['resume']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('resume')){
				$uploadData = $this->upload->data();
				$resume_file = $uploadData['file_name'];
			}else{
				$resume_file = '';
			}
		}else{
			$resume_file = $resume_file;
		}
		$cover_letter = $kichu->cover_letter;
		if(!empty($_FILES['cover_letter']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'pdf|docx|doc';
                $config['file_name'] = rand(999,99999).$_FILES['cover_letter']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('cover_letter')){
                    $uploadData = $this->upload->data();
					$coverletr_file = $uploadData['file_name'];
                }else{
                    $coverletr_file = '';
                }
		}else{
			$coverletr_file = $cover_letter;
		}
		$posted_date = time();

		$records = array(
			'job_title' => $job_title,
			'company_name' => $company_name,
			'skills' => $all_skills,
			'start_date' => strtotime($start_date),
			'end_date' => strtotime($end_date),
			'education' => $education,
			'max_salary' => $max_salary,
			'travel_distance' => $travel_distance,
			'relocate' => $relocate,
			'resume_file' => $resume_file,
			'cover_letter' => $coverletr_file,
			'post_type' => $post_type,
			'date_posted' => $posted_date,
			'user_id' => $user_id
		);
		$edit_data = $this->post_resume_m->edit_resume_m($user_id,$records);
		if($edit_data)
		{
			$this->session->set_flashdata("success", "Success , Your Profile Details Update Successfully!");
			redirect('post_resume/fetch_data/');
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('post_resume/fetch_data/');
		}
		


	}

	
}
?>