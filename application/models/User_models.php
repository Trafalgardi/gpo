<?php

class User_models extends CI_Model
{

	public function __construct(){
		
		$this->load->database();
		$this->load->library('Session/session');

	}

	public function insertexperience(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username']));
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
						
						

					);


			return $this->db->update('workexperience', $data);
		}
	}
	public function inserteducation(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
			if(isset($id))
			{

				$data_temp_1 = "";
				if($_POST['checkbox_1'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_1'].":-;";
				}
				if($_POST['checkbox_2'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_2'].":"."4;";
				}
				if($_POST['checkbox_3'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_3'].":"."4;";
				}
				if($_POST['checkbox_4'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_4'].":"."4;";
				}
				if($_POST['checkbox_5'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_5'].":-;";
				}
				if($_POST['checkbox_6'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_6'].":-;";
				}
				if($_POST['checkbox_7'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_7'].":-;";
				}
				if($_POST['checkbox_8'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_8'].":"."4;";
				}
				if($_POST['checkbox_9'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_9'].":"."4;";
				}
				if($_POST['checkbox_10'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_10'].":-;";
				}
				if($_POST['checkbox_11'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_11'].":-;";
				}
				if($_POST['checkbox_12'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_12'].":-;";
				}
				if(strlen($data_temp_1) == 0){
					$data_temp_1 .= "-:-;";
				}


				$data = array(

							'level_of_education' => $data_temp_1,
							
							

						);


				return $this->db->update('education', $data);
			}
	}

	public function inserteducation_1(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
			if(isset($id))
			{
				$data_temp_1 = "";

				if(strlen ($_POST['education_1']) == 0){
					$data_temp_1 = "-";
				}else {
					$data_temp_1 .= $_POST['education_1']." - " .$_POST['education_2'] . " " . $_POST['education_3'] . ": " . $_POST['education_4']. ": ". $_POST['education_5'];
				}
				if(strlen ($_POST['education_6'])!= 0 ){
					$data_temp_1 .= "\n". $_POST['education_6']." - " .$_POST['education_7'] . " " . $_POST['education_8'] . ": " . $_POST['education_9']. ": ". $_POST['education_10'];
				}
				if(strlen ($_POST['education_11'])!= 0 ){
					$data_temp_1 .= "\n". $_POST['education_11']." - " .$_POST['education_12'] . " " . $_POST['education_13'] . ": " . $_POST['education_14']. ": ". $_POST['education_15'];
				}
				if(strlen ($_POST['education_16'])!= 0 ){
					$data_temp_1 .= "\n". $_POST['education_16']." - " .$_POST['education_17'] . " " . $_POST['education_18'] . ": " . $_POST['education_19']. ": ". $_POST['education_20'];
				}
				if(strlen ($_POST['education_21'])!= 0 ){
					$data_temp_1 .= "\n". $_POST['education_21']." - " .$_POST['education_22'] . " " . $_POST['education_23'] . ": " . $_POST['education_24']. ": ". $_POST['education_25'];
				}
				if(strlen ($_POST['education_26'])!= 0 ){
					$data_temp_1 .= "\n". $_POST['education_26']." - " .$_POST['education_27'] . " " . $_POST['education_28'] . ": " . $_POST['education_29']. ": ". $_POST['education_30'];
				}

				$data = array(

							'higher_education' => $data_temp_1

						);


				return $this->db->update('education', $data);
			}

		
	}
	public function inserteducation_2(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
			if(isset($id))
			{
				$data_temp_1 = "";

				if(strlen ($_POST['education_1_1']) == 0){
					$data_temp_1 = "-";
				}else {
					$data_temp_1 .= $_POST['education_1_1']." - " .$_POST['education_1_2'] . " " . $_POST['education_1_3'] . ": " . $_POST['education_1_4']. ": ". $_POST['education_1_5']. ": ". $_POST['education_1_6'];
				}
				if(strlen ($_POST['education_1_7'])!= 0 ){
					$data_temp_1 .= "\n". $_POST['education_1_7']." - " .$_POST['education_1_8'] . " " . $_POST['education_1_9'] . ": " . $_POST['education_1_10']. ": ". $_POST['education_1_11']. ": ". $_POST['education_1_12'];
				}
				if(strlen ($_POST['education_1_13'])!= 0 ){
					$data_temp_1 .= "\n". $_POST['education_1_13']." - " .$_POST['education_1_14'] . " " . $_POST['education_1_15'] . ": " . $_POST['education_1_16']. ": ". $_POST['education_1_17']. ": ". $_POST['education_1_18'];
				}
				if(strlen ($_POST['education_1_19'])!= 0 ){
					$data_temp_1 .= "\n". $_POST['education_1_19']." - " .$_POST['education_1_20'] . " " . $_POST['education_1_21'] . ": " . $_POST['education_1_22']. ": ". $_POST['education_1_23']. ": ". $_POST['education_1_24'];
				}
				if(strlen ($_POST['education_1_25'])!= 0 ){
					$data_temp_1 .= "\n". $_POST['education_1_25']." - " .$_POST['education_1_26'] . " " . $_POST['education_1_27'] . ": " . $_POST['education_1_28']. ": ". $_POST['education_1_29']. ": ". $_POST['education_1_30'];
				}
				

				$data = array(

							'higher_education' => $data_temp_1

						);


				return $this->db->update('education', $data);
			}

		
	}

	public function inserteducation_3(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
			if(isset($id))
			{
				$data_temp_1 = "";

				if(strlen ($_POST['education_2_1']) == 0){
					$data_temp_1 = "-";
				}else {
					$data_temp_1 .= $_POST['education_2_1']." - " .$_POST['education_2_2'] . " " . $_POST['education_2_3'] . ": " . $_POST['education_2_4']. ": ". $_POST['education_2_5'];
				}
				if(strlen ($_POST['education_2_6'])!= 0 ){
					$data_temp_1 .= "\n". $_POST['education_2_6']." - " .$_POST['education_2_7'] . " " . $_POST['education_2_8'] . ": " . $_POST['education_2_9']. ": ". $_POST['education_2_10'];
				}
				if(strlen ($_POST['education_2_11'])!= 0 ){
					$data_temp_1 .= "\n". $_POST['education_2_11']." - " .$_POST['education_2_12'] . " " . $_POST['education_2_13'] . ": " . $_POST['education_2_14']. ": ". $_POST['education_2_15'];
				}
				if(strlen ($_POST['education_2_16'])!= 0 ){
					$data_temp_1 .= "\n". $_POST['education_2_16']." - " .$_POST['education_2_17'] . " " . $_POST['education_2_18'] . ": " . $_POST['education_2_19']. ": ". $_POST['education_2_20'];
				}
				if(strlen ($_POST['education_2_21'])!= 0 ){
					$data_temp_1 .= "\n". $_POST['education_2_21']." - " .$_POST['education_2_22'] . " " . $_POST['education_2_23'] . ": " . $_POST['education_2_24']. ": ". $_POST['education_2_25'];
				}
				if(strlen ($_POST['education_2_26'])!= 0 ){
					$data_temp_1 .= "\n". $_POST['education_2_26']." - " .$_POST['education_2_27'] . " " . $_POST['education_2_28'] . ": " . $_POST['education_2_29']. ": ". $_POST['education_2_30'];
				}

				$data = array(

							'higher_education' => $data_temp_1

						);


				return $this->db->update('education', $data);
			}

		
	}

	public function contactinfoupdate(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
			if(isset($id))
			{

				if($_POST['phone_1'] == 0 ){
				$data_temp_1 .= "-";
				}else{
					$data_temp_1 .= $_POST['phone_2'];
				}
				if($_POST['email'] == 0 ){
					$data_temp_2 = "-";
				}else{
					$data_temp_2 = $_POST['email_1'];
				}
				

				$data = array(

							'home_phone' => $_POST['phone']
							
						);


				$this->db->update('phone', $data);
							
				$data = array(

							'change_phone' => $_POST['phone_1'].":".$data_temp_1.";",
							'change_email' => $_POST['email'].":".$data_temp_2.";"
							
						);


				$this->db->update('changeofpersonaldata', $data);
				return;

			}

		
	}

	public function contactinfoupdate_1(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
			if(isset($id))
			{
							
				$data = array(

							'recommendation' => $_POST['recom_1'].":".$_POST['recom_2'].":".$_POST['recom_3'].":".$_POST['recom_4'].":".$_POST['recom_5'],
							
						);


				$this->db->update('experience', $data);
				return;

			}

		
	}

	public function insertequestionnaire(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
			// pasportdata
		if(isset($id))
		{

			$data = array(

						'for_the_postition' => $_POST['nadoljnost'],
						'in_the_department' => $_POST['votdel'],
						'family_status' => $_POST['sp'],
						
						

					);
			$this->db->update('personaldata', $data);

			$data_1 = array(

						'pasport' => $_POST['pasportdata'],
						'sitizenship' => $_POST['citizenship'],
						'children' => $_POST['deti'],
						
						

					);
			$this->db->update('pasportdata', $data_1);
			// changeofpersonaldata

			return;
		}
	}
	public function insertequestionnaire_1(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
			// pasportdata
		if(isset($id))
		{


			if($_POST['fioF_1'] == 0 ){
				$data_temp_1 .= "-";
			}else{
				$data_temp_1 .= $_POST['fio_1'];
			}
			if($_POST['fioF_2'] == 0 ){
				$data_temp_2 = "-";
			}else{
				$data_temp_2 = $_POST['fio_2'];
			}
			if($_POST['fioF_3'] == 0 ){
				$data_temp_3 = "-";
			}else{
				$data_temp_3 = $_POST['fio_3'];
			}
			if($_POST['fioF_4'] == 0 ){
				$data_temp_4 = "-";
			}else{
				$data_temp_4 = $_POST['fio_4'];
			}

			$data = array(

						'change_last_name' => $_POST['fioF_1'].":".$data_temp_1.";",
						'change_first_name' => $_POST['fioF_2'].":".$data_temp_2.";",
						'change_patronymic' => $_POST['fioF_3'].":".$data_temp_3.";",
						'change_dob' => $_POST['fioF_4'].":".$data_temp_4.";",
						
						

					);
			$this->db->update('changeofpersonaldata', $data);

			return;
		}
	}
	public function insertequestionnaire_2(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
			// pasportdata
		if(isset($id))
		{


			if($_POST['place_registed_ch'] == 0 ){
				$data_temp_1 .= "-";
			}else{
				$data_temp_1 .= $_POST['place_registed_ch1'];
			}
			if($_POST['place_life_ch'] == 0 ){
				$data_temp_2 = "-";
			}else{
				$data_temp_2 = $_POST['place_life_ch1'];
			}
			/*'change_last_name' => $_POST['fioF_1'].":".$data_temp_1.";",
						'change_first_name' => $_POST['fioF_2'].":".$data_temp_2.";",
						*/

			$data = array(

						'placeofbirth' => $_POST['place_birth'],
						'placeofregisted' => $_POST['place_registed'],
						'placeoflife' => $_POST['place_life'],
						
						

					);
			$this->db->update('pasportdata', $data);

			$data = array(

						'change_registration' => $_POST['place_registed_ch'].":".$data_temp_1.";",
						'change_living_place' => $_POST['place_life_ch'].":".$data_temp_2.";",
						
						

					);
			$this->db->update('changeofpersonaldata', $data);

			return;
		}
	}

	public function driverlisenc(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
			if(isset($id))
			{

				$data_temp_1 = "";
				if($_POST['checkbox_1'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_1'].":";
				}
				if($_POST['checkbox_2'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_2'].":";
				}
				if($_POST['checkbox_3'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_3'].":";
				}
				if($_POST['checkbox_4'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_4'].":";
				}
				if($_POST['checkbox_5'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_5'].":";
				}
				if($_POST['checkbox_6'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_6'].":";
				}
				if($_POST['checkbox_7'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_7'].":";
				}
				if($_POST['checkbox_8'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_8'].":";
				}
				if($_POST['checkbox_9'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_9'].":";
				}
				if($_POST['checkbox_10'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_10'].":";
				}
				if($_POST['checkbox_11'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_11'].":";
				}
				if($_POST['checkbox_12'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_12'].":";
				}
				if($_POST['checkbox_13'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_13'].":";
				}
				if($_POST['checkbox_14'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_14'].":";
				}
				if($_POST['checkbox_15'] != true ){
					
				}else{
					$data_temp_1 .= $_POST['checkbox_15'].":";
				}
				if(strlen($data_temp_1) == 0){
					$data_temp_1 .= "-:-;";
				}


				$data = array(

							'catigory' => $data_temp_1,
							'experience' => $_POST['driving'],
							'availability' => $_POST['car_info']
						);


				return $this->db->update('drivinglicense', $data);
			}
	}

	public function military(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
			if(isset($id))
			{
				$temp = "";

				if($_POST['military'] == "невоеннообязанный")
				{
					$temp = $_POST['military']. ":" . $_POST['notmilitary_1']. ";";

				}else
				{
					$temp = $_POST['military']. ":" . $_POST['yesmilitary_1']. ";";
				}
				

				$data = array(

							'attitude ' => $temp,
							'war_bound' => $_POST['yesmilitary_rank_1']
						);


				return $this->db->update('militaryservice', $data);
			}
	}

	public function languages(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
			if(isset($id))
			{
				$data_temp_1 = "";
			for($i = 1; $i < 21; $i++)
			{
				if($_POST['checkbox_'.$i] == true )
				{

					$data_temp_1 .= $_POST['checkbox_'. $i . '_else'] . ":" . $_POST['checkbox_'. $i . '_else_'. $i] . ";";
					
				}
			}
				

				
				

				$data = array(

							
							'languages' => $data_temp_1
						);


				return $this->db->update('languages', $data);
			}
	}

	public function academicdegree(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
			if(isset($id))
			{
				
			$data_temp_1 = "";


				if($_POST['academicdegree_1'] == null)
				{
					$data_temp_1 .= "нет";
				}else 
				{

					$data_temp_1 .= $_POST['academicdegree_1'];

				}
				

				$data = array(

							
							'candidat' => $data_temp_1
						);


				return $this->db->update('academicdegree', $data);
			}
	}
	public function academicdegree1(){

		$this->load->helper('url');

		$query = $this->db->get_where('users', array('username' => $_SESSION['username']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
			if(isset($id))
			{
				$data_temp_1 = "";


				if($_POST['academicdegree_doc_1'] == null)
				{
					$data_temp_1 .= "нет";
				}else 
				{

					$data_temp_1 .= $_POST['academicdegree_doc_1'];

				}

				$data = array(

							
							'doctor' => $data_temp_1
						);


				return $this->db->update('academicdegree', $data);
			}
	}
}

