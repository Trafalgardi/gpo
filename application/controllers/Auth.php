<?php

class Auth extends CI_Controller
{

	public function __construct()
        {
                parent::__construct();

                if(isset($_SESSION['user_logged'])){

                	redirect("user/profile");

                }

                $this->load->model('auth_models');

        }

	public function login($page = 'login'){

		$this->load->helper('form');
    	$this->load->library('form_validation');

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

			if ($this->input->post('register') !== false){

				$this->form_validation->set_rules('username', 'Имя пользователя', 'required');
				$this->form_validation->set_rules('password', 'Пароль', 'required|min_length[6]');

				if($this->form_validation->run() == TRUE){

					$this->auth_models->checkuser();
				}
			}

			$this->db->close();
			$this->db->initialize();

			$this->load->view('templates/header');
			$this->load->view($page);
			$this->load->view('templates/footer');
	}
	public function register($page = 'register'){

		$this->load->helper('form');
    	$this->load->library('form_validation');


		if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

			if ($this->input->post('register') !== false){

				$this->form_validation->set_rules('username', 'Имя пользователя', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('phone', 'Телефон', 'required');
				$this->form_validation->set_rules('fio_1', 'Фамилия', 'required');
				$this->form_validation->set_rules('fio_2', 'Имя', 'required');
				$this->form_validation->set_rules('fio_3', 'Отчество', 'required');
				$this->form_validation->set_rules('dateofbirth', 'Дата рождения', 'required');
				$this->form_validation->set_rules('password', 'Пароль', 'required|min_length[6]');
				$this->form_validation->set_rules('confirm-password', 'Подтвердите пароль', 'required|min_length[6]|matches[password]|max_length[20]');

				if($this->form_validation->run() == TRUE){

					$this->auth_models->createuser();
					$this->session->set_flashdata("success", "Ваш аккаунт был зарегистрирован! <a href='login'> Можете войти сейчас.</a>");
					redirect("auth/register", "refresh");
					
				}
			
				
			}

			$this->db->close();
			$this->db->initialize();

			$this->load->view('templates/header_for_register');
			$this->load->view($page);
			$this->load->view('templates/footer_for_register');



	}

	public function openpage($page = 'openpage'){

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}


		$this->load->view('templates/header_for_openpage');
		$this->load->view($page);
		$this->load->view('templates/footer_for_openpage');

	}

	public function politics($page = 'politics'){

		if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

			

			$this->load->view('templates/header');
			$this->load->view($page);
			$this->load->view('templates/footer');
	}


}