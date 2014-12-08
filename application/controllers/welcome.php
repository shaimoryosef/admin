<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{	
		if($this->aauth->is_loggedin()){redirect('/dashboard');}
		
		$this->load->view('header');	
		$this->load->view('welcome');	
		$this->load->view('footer');	
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */