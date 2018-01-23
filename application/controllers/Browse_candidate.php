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
        $search_data = $this->resume_search();
        $config = array();
        if($search_data['address'] == '' && $search_data['company_name'] == '' && $search_data['education'] == '' && $search_data['relocate'] == '' && $search_data['max_salary'] == '' && $search_data['skills'] == ''){
            $config["total_rows"] = $this->browse_candidate_m->record_count();
        }else{
            $config["total_rows"] = $this->browse_candidate_m->search_record_count($search_data);
        }

        
        $config["base_url"] = base_url() . "browse_candidate";
        $config['per_page'] = 5;
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

        $data["resume_details"] = $this->browse_candidate_m->fetch_resume($config["per_page"], $page , $search_data);

        $data["links"] = $this->pagination->create_links();
        //$v = $data["resume_details"];
        //print_r($data["resume_details"]);
       	$data['page_nm'] = "browse_candidate";
       	$data['skills_all'] = $this->get_skills_list();
       	$data['edu_all'] = $this->get_education();
       	$data['comp_name'] = $this->get_companyname();
        $data['search_array'] = $search_data;
        $this->load->view("browse_candidate", $data);

        //print_r($data);
        //exit;
    }

    public function get_skills_list(){
    	$skills = $this->browse_candidate_m->fetch_uniqu_skills();
    	return $skills;
    }

    public function get_education(){
    	$education = $this->browse_candidate_m->fetch_uniqu_edu();
    	return $education;
    }

    public function get_companyname(){
    	$comp_name = $this->browse_candidate_m->fetch_comp_name();
    	return $comp_name;
    }

    public function resume_search(){
        $city = $this->input->post('city');
        $this->session->set_tempdata("city",$city);

        $company_name = $this->input->post('comp_name');
        $this->session->set_tempdata("comp_name",$company_name);

        $edu = $this->input->post('edu');
        $this->session->set_tempdata("edu",$edu);

        $exp = $this->input->post('exp');
        $this->session->set_tempdata("exp",$exp);

        $reloc = $this->input->post('reloc');
        $this->session->set_tempdata("reloc",$reloc);

        $ann_pay = $this->input->post('ann_pay');
        $this->session->set_tempdata("ann_pay",$ann_pay);

        $skills_get = $this->input->post('skills');
        if(count($skills_get) > 0){
            $all_skills = implode(",",$skills_get);
        }else{
            $all_skills = "";
        }
        $this->session->set_tempdata("all_skills",$all_skills);

        $search_array = array(
            'address' => $city,
            'company_name' => $company_name,
            'education' => $edu,
            /*'exp' => $exp,*/
            'relocate' => $reloc,
            'max_salary' => $ann_pay,
            'skills' => $all_skills,
        );
        //print_r($search_array);

        return $search_array;
    }
}
?>