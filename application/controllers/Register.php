<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$data['page_nm'] = "Register";
		$this->load->view('register',$data);
	}

	public function add_employee()
	{
		$this->load->model('register_m');
		$first_name = $this->input->post('f_name');
		$last_name = $this->input->post('l_name');
		$email = $this->input->post('email');
		$records = array('email'=> $email);
		$got_email = $this->register_m->check_email($records);
		if($got_email == 0)
		{
		$phone =  $this->input->post('phone');
		$postcode = $this->input->post('postcode');
		$password  = $this->input->post('password');
		$con_pass = $this->input->post('con_password');
		$profile_image = "if_user_male2_172626.png";
		$date = time();
		$user_type= "employee";
		$user_status = "pending";

		if($password == $con_pass)
		{
			$records = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'password'=>$password,'phone'=>$phone,'postcode'=>$postcode,'profile_picture'=>$profile_image,'registration_date'=>$date,'user_type'=>$user_type,'user_status'=>$user_status);
			$insert_data = $this->register_m->insert_employee($records);
			if($insert_data != '')
		{
			$records = array('user_id'=> $insert_data);
			$insert_emp_details = $this->register_m->insert_emp($records);
			$get_register_details = $this->register_m->fetch_register_details($insert_data);
		
			if($get_register_details)
			{
				 $sess_array = array(
				'user_id' => $get_register_details->user_id,
				 'first_name' => $get_register_details->first_name,
				 'last_name' => $get_register_details->last_name,
				 'email' => $get_register_details->email,
				 'address' => $get_register_details->address,
				 'user_type' => $get_register_details->user_type,
				 'address' => $get_register_details->address,
				 'account_first_name' => $get_register_details->account_first_name,
				 'account_last_name' => $get_register_details->account_last_name,
				 'phone' => $get_register_details->phone,
				 'postcode' => $get_register_details->postcode,
				 'comapny_name' => $get_register_details->comapny_name,
				 'registration_date' => $get_register_details->registration_date,
				 'user_status' => $get_register_details->user_status,
				 'profile_picture' => $get_register_details->profile_picture,
				 'islogged_in' => "true"
				   );
				
				$this->session->set_userdata('logged_in', $sess_array);
				redirect('dashboard');
			}
		}
		else{
			$this->session->set_flashdata("failed", "Something Is Wrong!");
			redirect('register');	
		}
		}
		else
		{
			$this->session->set_flashdata("password_failed", "Password Does Not match!");
			redirect('register');
		}
		}
		else
		{
			$this->session->set_flashdata("email_failed", "Email Already Exist!");
			redirect('register');

		}
	}
	

	public function add_employeer()
	{
		$this->load->model('register_m');
		$first_name = $this->input->post('f_name');
		$last_name = $this->input->post('l_name');
		$email = $this->input->post('email');
		$records = array('email'=> $email);
		$got_email = $this->register_m->check_email($records);
		if($got_email == 0)
		{
		$phone =  $this->input->post('phone');
		$account_first_name = $this->input->post('acc_fname');
		$account_last_name  = $this->input->post('acc_lname');
		$company_name = $this->input->post('company_name');
		$address = $this->input->post('address');
		$postcode = $this->input->post('post_code');
		$password  = $this->input->post('password');
		$con_pass = $this->input->post('con_password');
		$profile_image = "if_user_male2_172626.png";
		$date = time();
		$user_type= "employeer";
		$user_status = "pending";
		if($password == $con_pass)
		{
			$records = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'password'=>$password,'phone'=>$phone,'postcode'=>$postcode,'address'=>$address,'profile_picture'=>$profile_image,'account_first_name'=>$account_first_name,'account_last_name'=>$account_last_name,'comapny_name'=>$company_name,'registration_date'=>$date,'user_type'=>$user_type,'user_status'=>$user_status);
			$insert_employeer = $this->register_m->insert_employee($records);
			if($insert_employeer != '')
			{
			$get_register_details = $this->register_m->fetch_register_details($insert_employeer);
			if($get_register_details)
			{
				$sess_array = array(
				'user_id' => $get_register_details->user_id,
				 'first_name' => $get_register_details->first_name,
				 'last_name' => $get_register_details->last_name,
				 'email' => $get_register_details->email,
				 'address' => $get_register_details->address,
				 'user_type' => $get_register_details->user_type,
				 'address' => $get_register_details->address,
				 'account_first_name' => $get_register_details->account_first_name,
				 'account_last_name' => $get_register_details->account_last_name,
				 'phone' => $get_register_details->phone,
				 'postcode' => $get_register_details->postcode,
				 'comapny_name' => $get_register_details->comapny_name,
				 'registration_date' => $get_register_details->registration_date,
				 'user_status' => $get_register_details->user_status,
				 'profile_picture' => $get_register_details->profile_picture,
				 'islogged_in' => "true"
				   );
				
				$this->session->set_userdata('logged_in', $sess_array);
				redirect('employeer_dashboard');
			}
	
			}
		else
			{
				$this->session->set_flashdata("failed", "Something went wrong!");
				redirect('register');	
			}
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('register');
		}
		}
		else
		{
			$this->session->set_flashdata("email_failed", "Email Already Exist!");
			redirect('register');
		}
	}

}
?>