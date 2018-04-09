<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	public function check_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$result = $this->db->get('accounts');
		if($this->db->affected_rows() == 1) {
			return true;
		}
		return false;
	}
	

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */ ?>