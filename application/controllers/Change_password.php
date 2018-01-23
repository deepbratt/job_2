<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
    }
	public function index()
	{
		$data['page_nm'] = "change_password";
		$this->load->view('change_password',$data);
	}

	public function edit_password()
	{
		$this->load->model('change_password_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$old_password = $this->input->post('old_password');
			$records = array(
			'user_id' => $user_id,
			'password' => $old_password

		);
		$get_old_password = $this->change_password_m->check_password($records);
		if($get_old_password > 0)
		{
			$new_password = $this->input->post('new_password');
			$records = array(
			'password' => $new_password
		);

		$edit_data = $this->change_password_m->update_password($user_id,$records);
		if($edit_data)
		{
			$this->session->set_flashdata("success", "Success , Your Profile Details Update Successfully!");
			redirect('change_password');
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('change_password');
		}
		}
		else
		{
			$this->session->set_flashdata("passwordfailed", "Please Check Your Password!");
			redirect('change_password');

		}
	}
	
}
?>