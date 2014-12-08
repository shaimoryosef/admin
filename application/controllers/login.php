<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{	
		if($this->aauth->is_loggedin()){redirect('/dashboard');}
		
		$this->sign_in();
		
	}
	
	public function sign_in()
	{	
		$this->load->view('header');	
		$this->load->view('login');	
		$this->load->view('footer');
	}	
	
	public function validate()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
	 
		
		if($this->form_validation->run() == FALSE){
			//Field validation failed.  User redirected to login page
			$this->load->view('header');	
			$this->load->view('login');	
			$this->load->view('footer');
		
		}else{
			//Check for database and redirect to private area
			redirect('/dashboard');
		}	
		
	}
	
}
