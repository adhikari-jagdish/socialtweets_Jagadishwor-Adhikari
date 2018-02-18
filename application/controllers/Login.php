<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
        $this->load->view('login');
		$this->load->helper('form');
	}

	public function login_check()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'UserName', 'required');

		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run())
                {
                	$username = $this->input->post('username');
                	$password = $this->input->post('password');
                	
                	$this->load->model('Loginmodel');
                	

                if($this->Loginmodel->check_login($username, $password))
                {
                	$this->load->view('admin_dashboard');
                }	
                else{
                	 $this->load->view('Login');
                }

                       
                }
                else
                {
                      $this->load->view('Login');
                }

                
	}
}