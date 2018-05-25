<?php

class User_models extends CI_Model
{

	public function __construct(){
		
		$this->load->database();
		$this->load->library('Session/session');

	}

	public function insertexperience(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username'], 'fio' => $_SESSION['user_fio']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
		if(isset($id))
		{

			$data = array(

						'general_experience' => $_POST['experience_0'],
						'specialty' => $_POST['experience_1'],
						'managerial_experience' => $_POST['experience_2'],
						'pedagogical_experience' => $_POST['experience_3'],
						'project_management' => $_POST['experience_4'],
						'not_by_profession' => $_POST['experience_5'],
						'workers_specialties' => $_POST['experience_6'],
						
						'users_id' => $id

					);


			return $this->db->insert('experience', $data);
		}
	}
}

