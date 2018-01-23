<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Joblisting extends CI_Controller {

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
        $this->load->model("job_listing_m");
        $this->load->library("pagination");
    }
	public function index()
	{
		$config = array();
		
		$search_data = $this->get_job_search();
		//print_r($search_data);
        $config = array();
        if($search_data['location'] == '' && $search_data['job_title'] == '' && $search_data['type'] == '' && $search_data['salary_details'] == '' && $search_data['job_category'] == ''){
            $config["total_rows"] = $this->job_listing_m->record_count();
        }else{
            $config["total_rows"] = $this->job_listing_m->search_record_count($search_data);
        }
        $config["base_url"] = base_url() . "joblisting";
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

		/*$keyword = $this->session->userdata('keyword');
    	$jobtype = $this->session->userdata('jobtype');
    	$location = $this->session->userdata('location');
    	$search_result = $this->job_listing_m->job_search($keyword,$jobtype,$location);
    	foreach ($search_result as $row) {
    		echo $row->company_name;
    	}*/

        $data["job_details"] = $this->job_listing_m->fetch_job($config["per_page"], $page , $search_data);
        $data["links"] = $this->pagination->create_links();
        //$data['skills_all'] = $this->Browse_candidate->get_skills_list();
        $data['job_type'] = $this->get_type_list();
        $data['job_cat'] = $this->get_job_cat();
		$data['page_nm'] = "joblisting";
		$this->load->view('job_listing',$data);
	}

	public function get_type_list(){
    	$job_type = $this->job_listing_m->fetch_job_type();
    	return $job_type;
    }

    public function get_job_cat(){
    	$job_cat = $this->job_listing_m->get_job_cat();
    	return $job_cat;
    }

    public function get_job_search(){
    	$job_title = $this->input->post('job_title');
        $this->session->set_tempdata("job_title",$job_title);

        $city = $this->input->post('city');
        $this->session->set_tempdata("city",$city);

        $type = $this->input->post('type');
        $this->session->set_tempdata("type",$type);

        $ann_pay = $this->input->post('ann_pay');
        $this->session->set_tempdata("ann_pay",$ann_pay);

        $cat = $this->input->post('cat');
        if(count($cat) > 0){
            $all_cat = implode(",",$cat);
        }else{
            $all_cat = "";
        }
        $this->session->set_tempdata("cat",$all_cat);

        $search_array = array(
            'location' => $city,
            'job_title' => $job_title,
            'type' => $type,
            'salary_details' => $ann_pay,
            'job_category' => $all_cat,
        );
        //print_r($search_array);

        return $search_array;
    }
}
?>