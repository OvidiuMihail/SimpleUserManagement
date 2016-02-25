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
	
	
	public function admins () 									// LOAD ADMINS VIEW
	{
		$this->load->view('admins');
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
															
															
															
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}