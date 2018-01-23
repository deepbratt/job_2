<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Login model class

*/

class Applicant_dashboard_m extends CI_Model 
{

	public function get_applicant_details($applicant_id)
	{
		$condition = "users.user_id =" . "'" . $applicant_id ."'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('resume', 'users.user_id = resume.user_id');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->row();
	}
	

}
?>
