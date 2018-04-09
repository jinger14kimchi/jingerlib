<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function index()
	{
		
	}

	public function validate($value='')
	{
		$this->load->model('login_model', 'login');
		$this->load->library('encryption');

		$password = $this->input->post('password');
		$username = $this->input->post('username');
		// $password = $this->encryption->encrypt($password);
		$validated = $this->login->check_login($username, $password);
		if($validated) {
			$data['msg'] = "Logged in Successfully";
			$sess_data = array(
			        'username'  => $username,
			        'logged_in' => TRUE
			);
			$this->session->set_userdata($sess_data);
			$this->load->view('templates/header');
			$this->load->view('dashboard');
			$this->load->view('templates/footer');
		}
		else {
			$data['msg'] = "Sorry, username and password invalid!";			
			$this->load->view('templates/header');
			$this->load->view('templates/login-form', $data);
			$this->load->view('templates/footer');
		}
	}

}

/* End of file Account.php */
/* Location: ./application/controllers/Account.php */