<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_post extends CI_Controller {

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
        	$this->session->set_flashdata("log", "You need to login to post a job");
            redirect('login');
        }
    }
    
	public function index()
	{
		$this->load->model('job_post_m');
		$data['fetch_cat'] = $this->job_post_m->fetch_job_cat();
		$data['page_nm'] = "job_post";
		$this->load->view('job_post',$data);
	}
	public function submit_job()
	{
		$this->load->model('job_post_m');
		$company_id = $this->session->userdata['logged_in']['user_id'];
		$job_title = $this->input->post('job_title');
		$yo = $this->input->post('job_cat');
		$job_cat = implode(',',$yo);
		$location = $this->input->post('location');
		$job_type = $this->input->post('job_type');
		$salary = $this->input->post('salary');
		$description = $this->input->post('description');
		$company_name = $this->input->post('company_name');
		$company_status = $this->input->post('company_status');
		if($company_status == "no")
		{
			$com_stat = 'no';
		}
		else{
			$com_stat = 'yes';
		}
		$logo_status = $this->input->post('logo_status');
		if($logo_status == "no")
		{
			$logo_stat = 'no';
		}
		else{
			$logo_stat = 'yes';
		}
		$contact_name = $this->input->post('contact_name');
		$contact_number = $this->input->post('contact_number');
		$date = time();

		if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array('company_id'=>$company_id,'job_title'=> $job_title,'job_category'=> $job_cat,'location'=> $location,'type'=> $job_type,'salary_details'=> $salary,'job_description'=> $description,'company_name'=> $company_name,'name_status'=> $com_stat,'company_logo'=> $image,'logo_status'=> $logo_stat,'contact_name'=> $contact_name,'contact_number'=> $contact_number,'date'=> $date,'job_status'=> 'pending');
                }else{
                    $image = '';
					$records=array('company_id'=>$company_id,'job_title'=> $job_title,'job_category'=> $job_cat,'location'=> $location,'type'=> $job_type,'salary_details'=> $salary,'job_description'=> $description,'company_name'=> $company_name,'name_status'=> $com_stat,'logo_status'=> $logo_stat,'contact_name'=> $contact_name,'contact_number'=> $contact_number,'date'=> $date,'job_status'=> 'pending');
                }
		}else{
			$records=array('company_id'=>$company_id,'job_title'=> $job_title,'job_category'=> $job_cat,'location'=> $location,'type'=> $job_type,'salary_details'=> $salary,'job_description'=> $description,'company_name'=> $company_name,'name_status'=> $com_stat,'logo_status'=> $logo_stat,'contact_name'=> $contact_name,'contact_number'=> $contact_number,'date'=> $date,'job_status'=> 'pending');
		}

		$post_data = $this->job_post_m->insert_job($company_id,$records);
		if($post_data)
		{
			$this->session->set_flashdata("success", "Success , Your Job Posted Successfully!");
			redirect('job_post');
		}else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('job_post');
		}
		
	}
}
?>