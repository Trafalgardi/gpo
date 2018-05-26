<?php

class Test_models extends CI_Model
{

	public function __construct(){
		
		$this->load->database();
		$this->load->library('Session/session');

	}
}