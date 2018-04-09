<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {	
	public function index(){
	 	// ask first if nakasession, else, go to login page
		$this->load->model('getusers');
		$data['content'] = 'templates/login-form';
		$this->load->view('templates/portal', $data);
	}

}
