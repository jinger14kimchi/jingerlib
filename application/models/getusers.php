<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


class Getusers extends CI_Model {


	function __construct() {
    	parent::__construct();
	} 

	function get_all_entries() {
		$query = $this->db->get('users');
		$results = array();
		foreach ($query->result() as $row) {
			$results[] = $row;
		}

		// var_dump($results);
		return $results;
		
		}


}