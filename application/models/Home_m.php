<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	public function get_all($key_word)
	{
		/*$this->db->distinct();
		$this->db->select('job_title');
		$this->db->like('job_title', $key_word);
		$this->db->limit(5); 
		$query = $this->db->get('job_post');
		return array_unique($query->result());*/
		$query = $this->db->query("SELECT distinct job_title FROM job_post limit 5");
		return $query->result();
	}

}

/* End of file Home_m.php */
/* Location: ./application/models/Home_m.php */