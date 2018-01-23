<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Add Certificate Category model class

*/

class Change_password_m extends CI_Model 
{
	public function check_password($records)
	{
		$condition = "user_id =" . "'" . $records['user_id'] . "' AND " . "password =" . "'" . $records['password'] . "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$query = $this->db->get();
		$check_rows = $query->num_rows();
		return $check_rows;
	}

	public function update_password($user_id,$records)
	{
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('users', $records);
		return $query;

	}
}
?>	