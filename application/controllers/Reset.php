<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset extends CI_Controller 
{		
	
	
	
	public function __construct()					// CONSTRUIM SI INCARCAM MODELELE DE USERI
	{
		parent::__construct();
		$this->load->model('model_users');
		$this->load->library('session');
			
	}
	
	
	
	
	
	public function execute()
	{
		
		$this->load->library('email');
		$this->load->helper('string');
		
		$reset_email = $this->input->post("reset_email");		
		$password= random_string('alnum', 20);	
		
		mail($reset_email,"PASSWORD RESET",$password);
		
		if(mail($reset_email,"PASSWORD RESET",$password)) 
		{
			echo "Va rugam verificati mailul"
		}
	
		$password=md5($password);		
		$this->model_users->age($reset_email,$password);
	}
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
}