<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Add Certificate Category model class

*/

class Edit_setting_m extends CI_Model 
{
	public function fetch_normal_details($emp_id)
	{
		$condition = "user_id =" . "'" . $emp_id ."'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_get_profile_pic($user_id)
	{
		$condition = "user_id =" . "'" . $user_id ."'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->row();
	}

		public function edit_profile($user_id,$records)
	{
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('users', $records);
		return $query;

	}
}
?>	