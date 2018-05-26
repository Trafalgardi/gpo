<?php

class Test extends CI_Controller 
{

	public function __construct()
        {
        	parent::__construct();

        	$this->load->database();
			$this->load->library('Session/session');
			$this->load->model('test_models');

                if(!isset($_SESSION['user_logged'])){

                	$this->session->set_flashdata("error", "Пожалуйста авторизуйтесь!");
                	redirect("auth/login");

                }
        }

	public function test_1($page = 'test_1'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/test/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		$this->load->view('templates/header_for_user');
		$this->load->view('test/'.$page);
		$this->load->view('templates/footer_for_user');
	}
	public function test_one($page = 'test_one'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/test/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		$this->load->view('templates/header_for_user');
		$this->load->view('test/'.$page);
		$this->load->view('templates/footer_for_user');
	}
	public function test_two($page = 'test_two'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/test/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		$this->load->view('templates/header_for_user');
		$this->load->view('test/'.$page);
		$this->load->view('templates/footer_for_user');
	}
	public function test_three($page = 'test_three'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/test/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		$this->load->view('templates/header_for_user');
		$this->load->view('test/'.$page);
		$this->load->view('templates/footer_for_user');
	}

	public function logout(){

		unset($_SESSION);
		session_destroy();
		redirect("auth/openpage", "refresh");
	}
}