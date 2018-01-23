<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Login model class

*/

class Login_m extends CI_Model 
{
	public function check_login($records)
	{
		$condition = "email =" . "'" . $records['email'] . "' AND " . "password =" . "'" . $records['password'] . "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$query = $this->db->get();

		if($query->num_rows() == 1){
			return $query->result();
		}else{
			return false;
		}
	}
}
?>