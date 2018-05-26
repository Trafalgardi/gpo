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
					//'phone ' => $_POST['phone'],
					//'fio' => $fio,
					//'dateofbirth' => $_POST['dateofbirth'],
					'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
					'join_date' => date('Y-m-d')

				);
		$this->db->insert('users', $data);

		$query = $this->db->get_where('users', array('username' => $_POST['username'], 'email' => $_POST['email']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
		$data_1 = array(

			'phone ' => $_POST['phone'],
			'users_id' => $id

		);
		$this->db->insert('phone', $data_1);
		$data_2 = array(

			'last_name' => $_POST['fio_1'],
			'first_name' => $_POST['fio_2'],
			'patronymic' => $_POST['fio_3'],
			'users_id' => $id

		);
		$this->db->insert('fio', $data_2);
		$data_3 = array(

			'sex ' => $_POST['sex'],
			'date_of_birth' => $_POST['dateofbirth'],
			'users_id' => $id

		);
		$this->db->insert('personaldata', $data_3);
		$data_4 = array(

			'users_id' => $id

		);
		$this->db->insert('academicdegree', $data_4);
		$data_5 = array(

			'users_id' => $id

		);
		$this->db->insert('changeofpersonaldata', $data_5);
		$data_6 = array(

			'users_id' => $id

		);
		$this->db->insert('drivinglicense', $data_6);
		$data_7 = array(

			'users_id' => $id

		);
		$this->db->insert('education', $data_7);
		$data_8 = array(

			'users_id' => $id

		);
		$this->db->insert('experience', $data_8);
		$data_9 = array(

			'users_id' => $id

		);
		$this->db->insert('languages', $data_9);
		$data_10 = array(

			'users_id' => $id

		);
		$this->db->insert('militaryservice', $data_10);
		$data_11 = array(

			'users_id' => $id

		);
		$this->db->insert('pasportdata', $data_11);
		$data_12 = array(

			'users_id' => $id

		);
		$this->db->insert('workexperience', $data_12);

		return;
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

				$query = $this->db->get_where('users', array('username' => $_POST['username']));
				$id = "";
				
				foreach ($query->result() as $row)
					{
					    $id = $row->id;
					    $_SESSION['users_id'] = $id;
					}
				$query = $this->db->get_where('fio', array('users_id' => $id));
				$fio = "";
				$fio1 = "";
				$fio2 = "";
				$fio3 = "";
				
				foreach ($query->result() as $row)
					{
					    $fio1 = $row->last_name;
					    $fio2 = $row->first_name;
					    $fio3 = $row->patronymic;
					    $fio = $fio1 . " " . $fio2 . " " . $fio3;
					    $_SESSION['user_fio'] = $fio;
					}
				if(isset($row))
				{

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