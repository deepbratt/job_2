<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_listing_m extends CI_Model {

/*public function fetch_job()
{
	$query = $this->db->get('job_post'); 
	return $query;
}*/

	public function __construct() {
        parent::__construct();
    }
	public function record_count() {
		$this->db->select('*');
	        $this->db->from('job_post');
	        $this->db->order_by('job_id desc');
	        $query = $this->db->get();
	        return $query->num_rows();
	}

	public function search_record_count($search_data)
	{
		$this->db->select('*');
        $this->db->from('job_post');
        $this->db->like($search_data);
        $this->db->order_by('job_id desc');
        $query = $this->db->get();
        return $query->num_rows();
	}
	public function fetch_job($limit, $start , $search_data) {
	        $this->db->select('*');
	        $this->db->from('job_post');
	        $this->db->like($search_data);
	        $this->db->limit($limit, $start);
	        $this->db->order_by('job_id desc');
	        $query = $this->db->get();
	        return $query->result();
	}

	public function get_cities(){
		$this->db->select("location");
        $this->db->from("resume");
        $query = $this->db->get();
        return $query->result();
	}
	public function fetch_job_type()
	{
		$this->db->distinct();
        $this->db->select("type");
        $this->db->from("job_post");
        $query = $this->db->get();
        return $query->result();
	}
	public function get_job_cat()
	{
        $this->db->select("");
        $this->db->from("job_category");
        $query = $this->db->get();
        return $query->result();
	}
	   
}

/* End of file job_listing_m */
/* Location: ./application/models/job_listing_m */
?>