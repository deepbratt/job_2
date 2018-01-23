<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class job_details_m extends CI_Model {

public function get_details($job_id)
{
	$query = $this->db->get_where('job_post', array('job_id' => $job_id));
	return $result=$query->row();
}
public function get_all_cat()
{
	$query = $this->db->get_where('job_category');
	return $query->result();
}

public function get_cat($cat_id)
{
	$query = $this->db->get_where('job_category', array('category_id' => $cat_id));
	return $query->result();
}
public function get_similar($cat_id,$job_id)
{
	$query = $this->db->query('select * from job_post where FIND_IN_SET ("'.$cat_id.'", job_category) and job_id !="'.$job_id.'"');
	return $query->result();
}

public function get_applicant($job_id)
{
	$condition = "job_id =" . "'" . $job_id ."'";
	$this->db->select('*');
	$this->db->from('apply');
	//$this->db->join('resume', 'users.user_id = resume.user_id');
	$this->db->where($condition);
	$query = $this->db->get();
	return $query->result();
	//$get_details = $query->result();
	//foreach($get_details as $key)
	//{
		//$employee_id = $key->employee_id;
	//}
	//return $employee_id;

}

public function get_details_applicant($applicant_id)
{
	$condition = "user_id =" . "'" . $applicant_id ."'";
	$this->db->select('*');
	$this->db->from('users');
	//$this->db->join('resume', 'users.user_id = resume.user_id');
	$this->db->where($condition);
	$query = $this->db->get();
	return $query->row();
}
public function insert_msg($job_id,$message,$user_id)
{
	$query = $this->db->query('select * from job_post where job_id = "'.$job_id.'"');
	$yo = $query->result();
	foreach ($yo as $val) {
		$company_id =  $val->company_id;
		$date = time();
		$data = array(
        'job_id' => $job_id,
        'employee_id' => $user_id,
        'employer_id' => $company_id,
        'message_data' => $message,
        'apply_date' => $date
		);
		$query2 = $this->db->insert('apply', $data);
		return true;
	}
}

public function get_apply_check($user_id,$job_id)
	{
		$condition = "employee_id =" . "'" . $user_id . "' AND " . "job_id =" . "'" . $job_id . "'";
		$this->db->select('*');
		$this->db->from('apply');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->num_rows();

	}
public function delete_job($job_id)
	{
		$query = $this->db->query("delete from job_post where job_id='".$job_id."'");
		return true;
	}

}

/* End of file job_details_m.php */
/* Location: ./application/models/job_details_m.php */