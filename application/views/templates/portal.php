<?php 
	$this->load->view('templates/header');
		if(isset($content)) {
			$this->load->view($content);
		}
	$this->load->view('templates/footer');
 ?> 