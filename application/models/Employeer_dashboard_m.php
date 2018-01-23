<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Login model class

*/

class Employeer_dashboard_m extends CI_Model 
{



	public function employeer_details($user_id)
	{
		$condition = "user_id =" . "'" . $user_id ."'";
		$this->db->select('*');
		$this->db->from('users');
		//$this->db->join('job_post', 'users.user_id = job_post.company_id');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->row();
	}

	public function job_details($user_id)
	{
		$condition = "company_id =" . "'" . $user_id ."'";
		$this->db->select('*');
		$this->db->from('job_post');
		//$this->db->join('job_post', 'users.user_id = job_post.company_id');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query;
	}

	public function edit_resume_file($user_id,$records)
	{
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('resume', $records);
		return $query;
	}
}
?>
