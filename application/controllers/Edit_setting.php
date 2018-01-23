<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_setting extends CI_Controller {

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
		$data['page_nm'] = "edit_setting";
		$this->load->view('edit_setting',$data);
	}

	public function fetch_setting()
	{
		
		$this->load->model('edit_setting_m');
		$emp_id = $this->session->userdata['logged_in']['user_id'];
		$normal_details['normal_details'] = $this->edit_setting_m->fetch_normal_details($emp_id);
		$normal_details['page_nm'] = "edit_setting";
		$this->load->view('edit_setting',$normal_details);

	}

	public function edit_employee()
	{
		$this->load->model('edit_setting_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$first_name = $this->input->post('f_name');
		$last_name = $this->input->post('l_name');
		$email = $this->input->post('email');
		$phone =  $this->input->post('phone');
		$postcode = $this->input->post('postcode');
		$address = $this->input->post('address');

	
		//print_r($_FILES['profile_pic']['name']);
		if(!empty($_FILES['profile_pic']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'png|jpg|jpeg|bmp|gif';
                $config['file_name'] = rand(999,99999).$_FILES['profile_pic']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('profile_pic')){
                    $uploadData = $this->upload->data();
					$resume_file = $uploadData['file_name'];
                }else{
                    $resume_file = '';
                }
		}else{
			$kichu = $this->edit_setting_m->fetch_get_profile_pic($user_id);
			$resume_file = $kichu->profile_picture;
		}
		

			$records = array(
			'first_name' => $first_name,
			'last_name' => $last_name,
			'email' => $email,
			'address' => $address,
			'profile_picture' => $resume_file,
			'phone' => $phone,
			'postcode' => $postcode

		);

		$edit_data = $this->edit_setting_m->edit_profile($user_id,$records);
		if($edit_data)
		{
			$this->session->set_flashdata("success", "Success , Your Profile Details Update Successfully!");
			redirect('edit_setting/fetch_setting/'.$user_id);
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('edit_setting/fetch_setting/'.$user_id);
		}
		
	}

	
}
?>