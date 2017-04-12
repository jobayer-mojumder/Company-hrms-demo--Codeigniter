<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	
	public function index(){
		$data['content'] = $this->load->view('employee/dashboard', '', TRUE);
		$this->load->view('employee/index', $data);
	}
	public function add_application(){
		$data['content'] = $this->load->view('employee/add_application', '', TRUE);
		$this->load->view('employee/index', $data);
	}


	public function insert_application($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('day','Day','required');
		$this->form_validation->set_rules('fromDate','From Date','required');
		$this->form_validation->set_rules('toDate','To Date','required');
		$this->form_validation->set_rules('reason','Reason','required');
		$this->form_validation->set_rules('type','Leave Type','required');

		if($this->form_validation->run()){
				$day = $this->input->post('day');
				$fromDate = $this->input->post('fromDate');
				$toDate = $this->input->post('toDate');
				$reason = $this->input->post('reason');
				$type = $this->input->post('type');
				$this->load->model('Application');
				$q = $this->Application->insert_Application($day, $fromDate, $toDate, $reason, $type, $id);
				redirect('employee');
			}

		else{
			
			redirect('employee/add_application');
		}

	}

	public function view_application($id){
		$this->load->model('Application');
		$data['application'] = $this->Application->view_application($id);
		$data['content'] = $this->load->view('employee/view_application', $data, TRUE);
		$this->load->view('employee/index', $data);
	}

	public function view_task($id){
		$this->load->model('Task');
		$data['task'] = $this->Task->view_task($id);
		$data['content'] = $this->load->view('employee/view_task', $data, TRUE);
		$this->load->view('employee/index', $data);
	}

	public function lunch ($id){
		$date= date("Y-m-d");
		$this->load->model('Lunch');
		$data['num'] = $this->Lunch->lunch_view($id, $date);
		$data['content'] = $this->load->view('employee/lunch_order', $data, TRUE);
		$this->load->view('employee/index', $data);
	}
	public function lunch_order($id){
		$date= date("Y-m-d");
		$this->load->model('Lunch');
		$q = $this->Lunch->order($id, $date);
		redirect('employee/lunch/'.$id);
		
	}

	public function delete_order($id){
		$date= date("Y-m-d");
		$this->load->model('Lunch');
		$q = $this->Lunch->delete_order($id, $date);
		redirect('employee/lunch/'.$id);
		
	}
	public function all_order(){
		$date= date("Y-m-d");
		$this->load->model('Lunch');
		$data['lunch'] = $this->Lunch->all_order($date);
		$data['content'] = $this->load->view('employee/all_order', $data, TRUE);
		$this->load->view('employee/index', $data);
		
	}

}