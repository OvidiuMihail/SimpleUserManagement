<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{		
	public function __construct()					// CONSTRUIM SI INCARCAM MODELELE DE USERI
	{
		parent::__construct();
		$this->load->model('model_users');
		$this->load->library('session');
			
	}
	
	
	
	
	
	public function self_edit()							// LOGIN VALIDATION TIME
	{
				
		$new_nume = $this->input->post("new_nume");
		$new_email = $this->input->post("new_email");
		$new_telefon = $this->input->post("new_telefon");
		$new_description = $this->input->post("new_description");
		$new_g_varsta = $this->input->post("new_g_varsta");
		$new_nume_buletin = $this->input->post("new_nume_buletin");
		
		$nume = $this->session->userdata('nume');							// Doar asta il folosesc dar am lasat in comments daca vor trebuii si restu vreodata 
		// $email = $this->session->userdata('email');
		// $telefon = $this->session->userdata('telefon');
		// $description = $this->session->userdata('description');
		// $g_varsta = $this->session->userdata('g_varsta');
		// $nume_buletin = $this->input->post('nume_buletin');
		
																	//REGULI VALIDARE UPDATE USER
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('new_nume', 'Nume', 'required|trim|is_unique[users.nume]');		
		$this->form_validation->set_rules('new_email', 'Email', 'required|trim|valid_email');						//required|matches[passconf] aparent merge cu asta alternativa sa faci verificarea parolei good to know daca ii pui un $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required'); dupa
		$this->form_validation->set_rules('new_telefon', 'Telefon', 'required|trim|min_length[10]|max_length[10]');	
		$this->form_validation->set_rules('new_description', 'Description', 'required|trim');		
		$this->form_validation->set_rules('new_g_varsta', 'GrupaVarsta', 'required');			
		$this->form_validation->set_rules('new_nume_buletin', 'NumeBuletin', 'required|trim');	
	
	
	
	
		if ($this->form_validation->run())							// DACA RULEAZA VALIDAREA DE MAI SUS
        {		
		
			$new = array(
			"nume" => $this->input->post("new_nume"),
			"email" => $this->input->post("new_email"),
			"telefon" => $this->input->post("new_telefon"),
			"description" => $this->input->post("new_description"),
			"nume_buletin" => $this->input->post("new_nume_buletin")
			);
			
			
		if ($new_g_varsta == 'infant')
			{			
				$this->model_users->age($nume,'1');
			}
		if ($new_g_varsta == 'adult')
			{			
				$this->model_users->age($nume,'2');
			}
		if ($new_g_varsta == 'senior')
			{			
				$this->model_users->age($nume,'3');
			}
		$this->model_users->new_edit($nume,$new);	
			
		$nume = $new_nume;
		
		$this->reload_user($nume);
		}
		
	}
	
	
	
	
	
	
	
	

	
	public function reload_user($db_username)					
	{
		$user_data = $this->model_users->user_data($db_username);
		
		$user_data = json_encode($user_data); 
		
		$user_data_array = json_decode($user_data, true);	 
		
		$this->load->view('users', $user_data_array);
	
		$this->session->set_userdata($user_data_array);		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}