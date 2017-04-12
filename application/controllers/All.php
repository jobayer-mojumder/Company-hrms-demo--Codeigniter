<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Database');
		$q = $this->Database->table();
		$this->load->view('public/login');
	}

	public function logout()
	{	
		session_destroy();
		$this->load->view('public/login');
	}

	public function login_auth(){
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->load->model('Login');
			$login_id = $this->Login->auth($email, $password);
			if( $login_id ){
				$this->session->set_userdata('user_id', $login_id);
				$this->session->set_userdata('email', $email);
				$type = $this->Login->type($login_id);
				if($type == 1){
					$this->session->set_userdata('user_type', $type);					
					return redirect('admin');
				}
				else{
					$this->session->set_userdata('user_type', $type);
					return redirect('employee','refresh');
				}
			}
			else{
				$this->load->view('public/login');
			}
		}
		else{
			$this->load->view('public/login');
			
		}

	}
}