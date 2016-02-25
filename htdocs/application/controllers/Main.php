<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller 
{		
													// MODELE SI FISIERE FACI FISIERE CU LITERA MARE
	
	public function __construct()					// CONSTRUIM SI INCARCAM MODELELE DE USERI
	{
		parent::__construct();
		$this->load->model('model_users');
			$this->load->library('session');
			
	}
	public function index() 
													// INDEX RULEAZA MEREU PRIMUL
	{ 
		$this->login();								// AICI APELEZ DIRECT FUNCTIA LOGIN	
	}
	
	public function login () 
	{
		$this->load->view('login');							// ASA SE LOADEAZA UN VIEW
	}
															// ZONA TESTING
	public function test()								
	{
		
		$user_data = $this->model_users->user_data('user');
		$user_data = json_encode($user_data); 
		$user_data_array = json_decode($user_data, true); // TRUE MEANS CA E ASSOCIATIVE ARRAY CE SCOT
	
		
		 echo $user_data_array['nume_buletin'];
		
	
		
	
	//	echo ;
	
}
		
		
															// END ZONA TESTING
	
	public function view_user($db_username)					//FUNCTIE TRANSFER DATE USER DIN MODEL AFERENT IN JSON 
	{
		$user_data = $this->model_users->user_data($db_username);
		
		$user_data = json_encode($user_data); 
		
		$user_data_array = json_decode($user_data, true);	 // TRUE MEANS CA E ASSOCIATIVE ARRAY CE SCOT
		
		$this->load->view('users', $user_data_array);
	
			
		$this->session->set_userdata($user_data_array);
	
		return $user_data_array;
	
	
	}
	
	public function self_edit()							// LOGIN VALIDATION TIME
	{
				
		$new_nume = $this->input->post("new_nume");
		$new_email = $this->input->post("new_email");
		$new_telefon = $this->input->post("new_telefon");
		$new_description = $this->input->post("new_description");
		$new_g_varsta = $this->input->post("new_g_varsta");
		$new_nume_buletin = $this->input->post("new_nume_buletin");
		
		$nume = $this->session->userdata('nume');
		$email = $this->session->userdata('email');
		$telefon = $this->session->userdata('telefon');
		$description = $this->session->userdata('description');
		$g_varsta = $this->session->userdata('g_varsta');
		$nume_buletin = $this->input->post('nume_buletin');
		
			
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
	
		 $this->view_user($nume);

	}
	

	public function admins () 									// LOAD ADMINS VIEW
	{
		$this->load->view('admins');
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
				else																	// IL DUCEM PE USER IN USER SI APELAM VIEW_USER CU DATELE DIN POST 
				{
				
					$db_username = $this->input->post("username");
					
					$this->view_user($db_username);
					
				}
			}
				else																		//FAIL LOG IN 
			{
				redirect('Main/login');
			}

	}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}