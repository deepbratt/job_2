<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_details extends CI_Controller {

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
	public function index()
	{
		$this->load->model('job_details_m');
		$job_id = $this->uri->segment(2);
		$data['fetch_job'] = $this->job_details_m->get_details($job_id);
		$jccat = $this->job_details_m->get_details($job_id);
		$yo = explode(',',$jccat->job_category);

		$cat = array();
		$similiar = array();
		foreach ($yo as $cat_id) {
			$fetch_cat = $this->job_details_m->get_cat($cat_id);
			$cat = array_merge($cat,$fetch_cat);
			$fetch_similar = $this->job_details_m->get_similar($cat_id,$job_id);
			$similiar = array_merge($similiar,$fetch_similar);
		}
		
		$fetch_applicant = $this->job_details_m->get_applicant($job_id);
		//print_r($fetch_applicant);
		$data['get_applicant_details'] = array();
		if(count($fetch_applicant) > 1){
			foreach($fetch_applicant As $value_appli){
				//$emp_id = array_push($emp_id,$value_appli->employee_id);
				$applicant_id = $value_appli->employee_id;
				$data['get_applicant_details'][] = $this->job_details_m->get_details_applicant($applicant_id);
			}
		}else{
			$data['get_applicant_details'][] = "";
		}
		
		$data['fetch_cat'] = $cat;
		$data['similar_job'] = $similiar;
		
		$data['page_nm'] = "job_details";
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id']!= '') 
		{
			$atar_id = $this->session->userdata['logged_in']['user_id'];
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}
		else
		{
			$atar_id = '';
			$data['user_id'] = NULL;
		}
		
		$get_apply_not = $this->job_details_m->get_apply_check($atar_id,$job_id);
		if($get_apply_not > 0)
		{
			$status = "already applied";
		}
		else
		{
			$status = "apply";
		}
		$data['statuszz'] = $status;
		
		$this->load->view('job_details',$data);
	}
	public function send_message()
	{
		$this->load->model('job_details_m');
		 $job_id = $this->input->post('job_id');
		 $message = $this->input->post('message');
		 if(isset($this->session->userdata['logged_in']) && $this->session->userdata['logged_in'] != NULL){
			  $userdata = $this->session->userdata['logged_in'];
			  $user_id = $userdata['user_id'];
		 }
		$insert_data = $this->job_details_m->insert_msg($job_id,$message,$user_id);
		if($insert_data)
		{
			$this->session->set_flashdata("success", "Success , You Have Successfully Applied For This job!");
			redirect(''.base_url().'job_details/'.$job_id.'');
		}else{
			$this->session->set_flashdata("error", "Error , Something Went Wrong!");
			redirect(''.base_url().'job_details/'.$job_id.'');
		}
	}

	public function delete_job()
	{
		$this->load->model('job_details_m');
		$job_id =  $job_id = $this->input->post('job_id');

		$delete_job = $this->job_details_m->delete_job($job_id);
		if($delete_job)
		{
			$this->session->set_flashdata("success", "Success , Your have successfully deleted Job!");
			redirect('employeer_dashboard/');
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('employeer_dashboard/');
		}
	}
}
?>