<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse_candidate extends CI_Controller {

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

    public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model("browse_candidate_m");
        $this->load->library("pagination");
    }


    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "browse_candidate";
        $config["total_rows"] = $this->browse_candidate_m->record_count();
        $config['per_page'] = 10;
		$config['uri_segment'] = 2;
		$config['num_links'] = 3;
		$config['page_query_string'] = FALSE;
		$config['query_string_segment'] = 'page';
		$config['full_tag_open'] = '<nav style="background:#fff"><ul class="pagination" >';
		$config['full_tag_close'] = '</ul></nav>';
		$config['next_link'] = ' &#8594; ';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = ' &#8592; ';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item" style="background:#237fa5;color:#fff;"><span class="active" style="background:#237fa5;border:1px solid #237fa5;color:#fff;margin:3px;border-radius:5px;">';
		$config['cur_tag_close'] = '</span></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $start= (int)$this->uri->segment(2) * $config['per_page']+1;
		$end = ($this->uri->segment(2) == floor($config['total_rows']/ $config['per_page']))? $config['total_rows'] : (int)$this->uri->segment(2) * $config['per_page'] + $config['per_page'];

		$data['result_count']= "Showing ".$start." - ".$end." of ".$config['total_rows']." Results";
        $data["resume_details"] = $this->browse_candidate_m->fetch_resume($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        //$v = $data["resume_details"];
        //print_r($data["resume_details"]);
       	$data['page_nm'] = "browse_candidate";
       	$data['skills_all'] = $this->get_skills_list();
        $this->load->view("browse_candidate", $data);

        //print_r($data);
        //exit;
    }

    public function get_skills_list(){
    	$skills = $this->browse_candidate_m->fetch_uniqu_skills();
    	return $skills;
    }
}
?>