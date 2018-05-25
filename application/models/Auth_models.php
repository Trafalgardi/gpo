<?php

class Auth_models extends CI_Model
{

	public function __construct(){
		
		$this->load->database();
		$this->load->library('Session/session');

	}

	public function createuser(){

		$this->load->helper('url');

		$fio = $_POST['fio_1'] . " " . $_POST['fio_2'] . " " . $_POST['fio_3'];

		

		$data = array(

					'username' => $_POST['username'],
					'email' => $_POST['email'],
					'phone ' => $_POST['phone'],
					'fio' => $fio,
					'dateofbirth' => $_POST['dateofbirth'],
					'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
					'joindate' => date('Y-m-d')

				);

		return $this->db->insert('users', $data);
	}

	public function checkuser(){

		$this->load->helper('url');

		$username = $_POST['username'];

		$this->db->select('password', 'fio');
		$query = $this->db->get_where('users', array('username' => $username));
		$row = $query->row();
		if(isset($row))
		{
			$hash = $row->password;
			
			if (password_verify($_POST['password'], $hash)) {
				$this->session->set_flashdata("success", "Вы успешно прошли авторизацию!");

				$_SESSION['user_logged'] = TRUE;
				$this->db->select('fio');
				$query = $this->db->get_where('users', array('username' => $username));
				$row = $query->row();
				if(isset($row))
				{
					$fio = $row->fio;
			    	$_SESSION['user_fio'] = $fio;
			    	$_SESSION['username'] = $username;
				}
			    
				redirect("user/profile", "refresh");

			}else
			{

				$this->session->set_flashdata("error", "Такого пользователя не существует или пароль введен не верно");
				redirect("auth/login", "refresh");

			}
			
		}


	}
}