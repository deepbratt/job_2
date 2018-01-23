<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$data['page_nm'] = "home";
		$data['categories'] = $this->job_details_m->get_all_cat();
		$this->load->view('home',$data);
	}
	public function get_name_suggestion()
	{
		$this->load->model('home_m');
		$key_word = $this->input->post('key_word');
		$get_suggestion = $this->home_m->get_all($key_word);

		foreach ($get_suggestion as $row) {
			echo '<li style="margin-left: 14px;cursor:pointer;" onclick="fetch_data(this);" >'.$row->job_title.'</li>';
		}

	}
	public function send_data()
	{
		$key_words = $this->input->post('Key_words');
		$job_type = $this->input->post('job_type');
		$job_location = $this->input->post('job_location');

        $this->session->set_tempdata("job_title",$key_words);
        $this->session->set_tempdata("city",$job_location);
        $this->session->set_tempdata("type",$job_type);

		redirect('joblisting');
	}


}
?>