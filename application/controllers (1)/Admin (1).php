<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{	$data = array();
		$data['title'] = "Login";
		$this->load->view('admin/admin_login', $data);
	}

	public function check_admin_login()
	{
		$user_email = $this->input->post('user_email',TRUE );
		$user_password = $this->input->post('user_password',TRUE);
		$encrypt_password = md5($user_password);

		$this->load->model('admin_model');
		$user_detail = $this->admin_model->get_user_detail($user_email);

		if($encrypt_password == $user_detail->user_password)
		{
			$data = array();
			$data['title'] = "Admin-home";
			$data['sidebar'] = $this->load->view('admin/sidebar', '', true);

			$this->load->view('admin/admin_master', $data);
		}
		else{
			$data['error_message'] = "Incorrect email or password";
			$this->load->view('admin/admin_login', $data);
		 }

		
	}

		
}
