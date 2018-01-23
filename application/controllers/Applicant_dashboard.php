<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applicant_dashboard extends CI_Controller {

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
		$this->load->model('applicant_dashboard_m');
		
		$applicant_id = $this->uri->segment(2);
		$data['get_applicant_fetch'] = $this->applicant_dashboard_m->get_applicant_details($applicant_id);
		$data['page_nm'] = "applicant_dashboard";
		$this->load->view('applicant_dashboard',$data);
	}


}
?>