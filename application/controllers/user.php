<?php

class User extends CI_Controller 
{

	public function __construct()
        {
        	parent::__construct();

        	$this->load->database();
			$this->load->library('Session/session');
			$this->load->model('user_models');

                if(!isset($_SESSION['user_logged'])){

                	$this->session->set_flashdata("error", "Пожалуйста авторизуйтесь!");
                	redirect("auth/login");

                }
        }

	public function profile($page = 'profile'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		$this->load->view('templates/header_for_user');
		$this->load->view($page);
		$this->load->view('templates/footer_for_user');
	}

	public function logout(){

		unset($_SESSION);
		session_destroy();
		redirect("auth/openpage", "refresh");
	}

	public function questionnaire($page = 'questionnaire'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}


		if ($this->input->post('osnova-submit') == true){
			

			if($this->form_validation->run() == false){

				$this->user_models->insertequestionnaire();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("user/questionnaire", "refresh");
			}
			
		}

		if ($this->input->post('li-submit') == true){
			

			if($this->form_validation->run() == false){

				$this->user_models->insertequestionnaire_1();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("user/questionnaire", "refresh");
			}
			
		}

		if ($this->input->post('mesto-submit') == true){
			

			if($this->form_validation->run() == false){

				$this->user_models->insertequestionnaire_2();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("user/questionnaire", "refresh");
			}
			
		}


		
		

		$this->load->view('templates/header_for_user');
		$this->load->view($page);
		$this->load->view('templates/footer_for_user');
	}

	public function education($page = 'education'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}



		if ($this->input->post('submit_1') == true){

			if($this->form_validation->run() == false){

				$this->user_models->inserteducation();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("user/education", "refresh");
			}
			
		}
		if ($this->input->post('submit_2') == true){

			if($this->form_validation->run() == false){

				$this->user_models->inserteducation_1();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("user/education", "refresh");
			}
			
		}
		if ($this->input->post('submit_3') == true){

			if($this->form_validation->run() == false){

				$this->user_models->inserteducation_2();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("user/education", "refresh");
			}
			
		}
		if ($this->input->post('submit_4') == true){

			if($this->form_validation->run() == false){

				$this->user_models->inserteducation_3();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("user/education", "refresh");
			}
			
		}

		$this->load->view('templates/header_for_user');
		$this->load->view($page);
		$this->load->view('templates/footer_for_user');
	}
	public function contactinfo($page = 'contactinfo'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		if ($this->input->post('contactinfo_submit') == true){

			if($this->form_validation->run() == false){

				$this->user_models->contactinfoupdate();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("user/contactinfo", "refresh");
			}
			
		}

		if ($this->input->post('submit') == true){

			if($this->form_validation->run() == false){

				$this->user_models->contactinfoupdate_1();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("user/contactinfo", "refresh");
			}
			
		}

		$this->load->view('templates/header_for_user');
		$this->load->view($page);
		$this->load->view('templates/footer_for_user');
	}

	public function academicdegree($page = 'academicdegree'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		if ($this->input->post('submit') == true){

			if($this->form_validation->run() == false){

				$this->user_models->academicdegree();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("user/academicdegree", "refresh");
			}
			
		}

		if ($this->input->post('submit1') == true){

			if($this->form_validation->run() == false){

				$this->user_models->academicdegree1();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("user/academicdegree", "refresh");
			}
			
		}

		$this->load->view('templates/header_for_user');
		$this->load->view($page);
		$this->load->view('templates/footer_for_user');
	}

	public function drivinglicense($page = 'drivinglicense'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}
		if ($this->input->post('submit') == true){

			if($this->form_validation->run() == false){

				$this->user_models->driverlisenc();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("user/drivinglicense", "refresh");
			}
			
		}

		$this->load->view('templates/header_for_user');
		$this->load->view($page);
		$this->load->view('templates/footer_for_user');
	}
	public function military($page = 'military'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}
		if ($this->input->post('submit') == true){

			if($this->form_validation->run() == false){

				$this->user_models->military();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("user/military", "refresh");
			}
			
		}

		$this->load->view('templates/header_for_user');
		$this->load->view($page);
		$this->load->view('templates/footer_for_user');
	}
	public function languages($page = 'languages'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		if ($this->input->post('submit') == true){

			if($this->form_validation->run() == false){

				$this->user_models->languages();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("user/languages", "refresh");
			}
			
		}

		$this->load->view('templates/header_for_user');
		$this->load->view($page);
		$this->load->view('templates/footer_for_user');
	}
	public function experience($page = 'experience'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		$this->form_validation->set_rules('experience_0', 'Общий стаж', 'required');

		if ($this->input->post('experience') !== false){

			if($this->form_validation->run() == True){

				$this->user_models->insertexperience();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("user/experience", "refresh");
			}
			
		}

		$this->load->view('templates/header_for_user');
		$this->load->view($page);
		$this->load->view('templates/footer_for_user');
	}
	public function anexperience($page = 'anexperience'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		$this->load->view('templates/header_for_user');
		$this->load->view($page);
		$this->load->view('templates/footer_for_user');
	}
}