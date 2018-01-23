<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_post_m extends CI_Model {

	public function fetch_job_cat()
	{
		$query = $this->db->get('job_category'); 
		return $query;
	}
	public function insert_job($company_id,$records)
	{
		$this->db->insert('job_post', $records);
		return true;
	}

	

}

/* End of file Job_post_m.php */
/* Location: ./application/models/Job_post_m.php */