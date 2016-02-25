<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logger extends CI_Controller 
{		
													
	public function __construct()					// CONSTRUIM SI INCARCAM MODELELE DE USERI
	{
		parent::__construct();
		$this->load->model('model_users');
		$this->load->library('session');
			
	}
	
	public function login_validation()							// LOGIN VALIDATION TIME
	{	
		$username = $this->input->post("username");
		$password = $this->input->post("password");				// INCARCAREA DATELOR DIN POST
		
		$this->load->library('form_validation');				// INCARCAREA LIBRARIEI VALIDARE FORMS
		
		$this->form_validation->set_rules('username', 'Username', 'required|trim');		// REGULI VALIDARE
	
		$this->form_validation->set_rules('password', 'Password', 'required|md5');		// REGULI VALIDARE
		
		if ($this->form_validation->run())					// DACA RULEAZA VALIDAREA DE MAI SUS
        {	
			if($this->model_users->is_user($username, md5($password)) > 0) 				// VERIFICAM CONFORM MODELULUI AFERENT DACA ESTE IN TABEL NUMELE SI PAROLA DIN POST DE MAI SUS
			{
				if($this->model_users->is_admin($username) == 1) 						// VERIFICAM DACA ESTE ADMIN CONFORM DATELOR DIN POST LA BAZA DE DATE PE BAZA MODELULUI AFERENT
				{
					 redirect('Main/admins');											// AICI APELAM FUNCTIILE DE MAI SUS CARE NE TRIMIT IN PAGINILE FIECARUIA
				}
				else																	// IL DUCEM PE USER IN USER SI APELAM LOG_USER CU DATELE DIN POST 
				{				
					$db_username = $this->input->post("username");
					$this->log_user($db_username);
				}
			}
				else																		//FAIL LOG IN 
			{
				redirect('Main/login');
			}

	}
	}
	
		public function log_user($db_username)					//FUNCTIE TRANSFER DATE USER DIN MODEL AFERENT IN JSON 
	{
		$user_data = $this->model_users->user_data($db_username);
		
		$user_data = json_encode($user_data); 
		
		$user_data_array = json_decode($user_data, true);	 // TRUE MEANS CA E ASSOCIATIVE ARRAY CE SCOT
		
		$this->load->view('users', $user_data_array);
	
			
		$this->session->set_userdata($user_data_array);
	
		return $user_data_array;	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}