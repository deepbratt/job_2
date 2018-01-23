<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

	public function index()
	{
		$data['page_nm'] = "login";
		$this->load->view('login',$data);
	}

	public function login_user()
	{
		$this->load->model('login_m');
		echo $email = $this->input->post('email');
		echo $password = $this->input->post('password');
		$records=array('email'=>$email,'password'=>$password);
		$get_login = $this->login_m->check_login($records);
		if($get_login)
		{
			$sess_array = array();
			foreach($get_login as $row)
			{
				$sess_array = array(
				 'user_id' => $row->user_id,
				 'first_name' => $row->first_name,
				 'last_name' => $row->last_name,
				 'email' => $row->email,
				 'address' => $row->address,
				 'user_type' => $row->user_type,
				 'address' => $row->address,
				 'account_first_name' => $row->account_first_name,
				 'account_last_name' => $row->account_last_name,
				 'phone' => $row->phone,
				 'postcode' => $row->postcode,
				 'comapny_name' => $row->comapny_name,
				 'registration_date' => $row->registration_date,
				 'user_status' => $row->user_status,
				 'profile_picture' => $row->profile_picture,
				 'islogged_in' => "true"
			   );
			   $this->session->set_userdata('logged_in', $sess_array);
			   $get_type = $row->user_type;
			   if($get_type == 'employee')
				{
					redirect('dashboard');
				}
				else if($get_type == 'employeer')
				{
					redirect('employeer_dashboard');
				}
			}
		}
		else
		{
			$this->session->set_flashdata("password_failed", "Email Or Password Does Not match!");
			redirect('login');
		}
	}

	public function logout(){
		//$this->session->sess_destroy();
		$this->session->unset_userdata('logged_in');
		$this->session->set_flashdata("logouts", "You have successfully logged out!");
		redirect('login'); 
	}
}
?>