<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		$data['content'] = $this->load->view('admin/dashboard', '', TRUE);
		$this->load->view('admin/index',$data);
	}

	//add employee form show
	public function add_employee(){
		$data['content'] = $this->load->view('admin/add_employee', '', TRUE);
		$this->load->view('admin/index',$data);
	}

	public function edit_employee($id){
		$this->load->model('Employee');
		$data['employee'] = $this->Employee->get($id);
		$data['content'] = $this->load->view('admin/edit_employee', $data, TRUE);
		$this->load->view('admin/index',$data);
	}
	public function final_edit_employee($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('day','Day','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('contact','Contact','required');
		$this->form_validation->set_rules('joiningDate','joiningDate','required');
		$this->form_validation->set_rules('designation','Designation','required');
		$this->form_validation->set_rules('userType','User Type','required');

		if($this->form_validation->run()){
				$fullName = $this->input->post('fullName');
				$email = $this->input->post('email');
				$contact = $this->input->post('contact');
				$joiningDate = $this->input->post('joiningDate');
				$designation = $this->input->post('designation');
				$userType = $this->input->post('userType');
				$this->load->model('Employee');
				$q = $this->Employee->edit_employee($fullName, $email, $contact, $joiningDate, $designation, $userType, $id);
				redirect('admin/view_employee');
			}

		else{
			
			
		}

	}

	//view employee table show
	public function view_employee(){
		$this->load->model('Employee');
		$data['employee'] = $this->Employee->getAll();
		$data['content'] = $this->load->view('admin/view_employee', $data, TRUE);
		$this->load->view('admin/index',$data);	
	}

	//insert new employee to database

	public function insert_employee(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullName','Full name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('contact','Contact','required');
		$this->form_validation->set_rules('joiningDate','joiningDate','required');
		$this->form_validation->set_rules('designation','Designation','required');
		$this->form_validation->set_rules('userType','User Type','required');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]');

		if($this->form_validation->run()){
				$fullName = $this->input->post('fullName');
				$email = $this->input->post('email');
				$contact = $this->input->post('contact');
				$joiningDate = $this->input->post('joiningDate');
				$designation = $this->input->post('designation');
				$userType = $this->input->post('userType');
				$password = $this->input->post('password');
				$this->load->model('Employee');
				$q = $this->Employee->new_employee($fullName, $email, $contact, $joiningDate, $designation, $userType, $password);
				redirect('admin');
			}

		else{
			redirect('admin/add_employee');
			
		}
	}

	public function add_task(){
		$this->load->model('Employee');
		$data['employee'] = $this->Employee->getAll();
		$data['content'] = $this->load->view('admin/add_task', $data, TRUE);
		$this->load->view('admin/index',$data);
	}


	public function assign_task(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('taskTitle','Task Title','required');
		$this->form_validation->set_rules('taskDetails','Task Details','required');
		$this->form_validation->set_rules('employee','Employee','required');
		$this->form_validation->set_rules('startDate','Start date','required');
		$this->form_validation->set_rules('endDate','End date','required');

		if($this->form_validation->run()){
				$taskTitle = $this->input->post('taskTitle');
				$taskDetails = $this->input->post('taskDetails');
				$employee = $this->input->post('employee');
				$startDate = $this->input->post('startDate');
				$endDate = $this->input->post('endDate');
				$this->load->model('Task');
				$q = $this->Task->new_task($taskTitle, $taskDetails, $employee, $startDate, $endDate );
				redirect('admin');
			}

		else{
			redirect('admin/add_task');
			
		}
	}

	public function view_task(){
		$this->load->model('Task');
		$data['task'] = $this->Task->getAll();
		$data['content'] = $this->load->view('admin/view_task', $data, TRUE);
		$this->load->view('admin/index',$data);	
	}

	public function view_application(){
		$this->load->model('Application');
		$data['application'] = $this->Application->getAll();
		$data['content'] = $this->load->view('admin/view_application', $data, TRUE);
		$this->load->view('admin/index',$data);	
	}

	public function accept_application($id){
		$this->load->model('Application');
		$q = $this->Application->accept($id);
		redirect('admin/view_application','refresh');	
	}

	public function delete_application($id){
		$this->load->model('Application');
		$q = $this->Application->delete($id);
		redirect('admin/view_application','refresh');	
	}
}