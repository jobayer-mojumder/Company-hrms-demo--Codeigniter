<?php

class Task extends CI_Model
{
	public function new_task($taskTitle, $taskDetails, $employee, $startDate, $endDate){
		$this->db->query("insert into task_table(task_title, task_details, employee_id, start_date, end_date ,status, progress) Values('$taskTitle', '$taskDetails', '$employee', '$startDate', '$endDate', '0', '0')");
		return TRUE;
	}

	public function getAll(){
		$q = $this->db->query("select task_table.task_id, task_table.task_title, task_table.task_details, task_table.employee_id, task_table.start_date, task_table.end_date, user_table.fullname from task_table join user_table on task_table.employee_id=user_table.user_id");
		return $q->result();
	}
	public function view_task($id){
		$q = $this->db->query("select * from task_table where employee_id= $id order by task_id desc");
		return $q->result();
	}
}