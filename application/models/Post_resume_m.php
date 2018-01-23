<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Add Certificate Category model class

*/

class Post_resume_m extends CI_Model 
{
	public function save_resume_m($records)
	{
		$this->db->insert('resume', $records);
		return true;
	}

	public function fetch_emp_details($emp_id)
	{
		$condition = "user_id =" . "'" . $emp_id ."'";
		$this->db->select('*');
		$this->db->from('resume');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_get_resume($user_id)
	{
		$condition = "user_id =" . "'" . $user_id ."'";
		$this->db->select('*');
		$this->db->from('resume');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->row();

	}

	public function edit_resume_m($user_id,$records)
	{
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('resume', $records);
		return $query;

	}

}
?>	