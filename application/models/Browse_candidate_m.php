<?php
class Browse_candidate_m extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function record_count() {
        $this->db->select('*');
        $this->db->from('resume');
        $this->db->join('users', 'users.user_id = resume.user_id');
        $this->db->where('resume.date_posted != ""');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function search_record_count($search_data) {
        $this->db->select('*');
        $this->db->from('resume');
        $this->db->join('users', 'users.user_id = resume.user_id');
        $this->db->like($search_data);
        $this->db->where('resume.date_posted != ""');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function fetch_resume($limit, $start , $search_data) {
        $this->db->select('*');
        $this->db->from('resume');
        $this->db->join('users', 'users.user_id = resume.user_id');
        $this->db->like($search_data);
        $this->db->where('resume.date_posted != ""');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
   }

   public function fetch_uniqu_skills(){
        $this->db->distinct();
        $this->db->select("skills");
        $this->db->from("resume");
        $query = $this->db->get();
        return $query->result();
   }

   public function fetch_uniqu_edu(){
        $this->db->distinct();
        $this->db->select("education");
        $this->db->from("resume");
        $query = $this->db->get();
        return $query->result();
   }

   public function fetch_comp_name(){
        $this->db->distinct();
        $this->db->select("company_name");
        $this->db->from("resume");
        $query = $this->db->get();
        return $query->result();

   }

}
?>