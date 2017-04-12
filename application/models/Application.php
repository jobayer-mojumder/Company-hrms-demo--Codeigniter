<?php

class Application extends CI_Model
{
	public function insert_Application($day, $fromDate, $toDate, $reason, $type, $id){
		$this->db->query("insert into application(employee_id, days, from_date, to_date, reason, type, status) Values('$id','$day', '$fromDate', '$toDate', '$reason', '$type', '0')");
		return TRUE;
	}
	
	public function view_application($id){
		$q = $this->db->query("select * from application where employee_id = $id order by id DESC");
		return $q->result();
	}

	public function getAll(){
		$q = $this->db->query("select application.days, application.id, application.from_date, application.to_date, application.type, application.reason, application.status, user_table.fullname from application  
			INNER JOIN user_table on application.employee_id=user_table.user_id");
		return $q->result();
	}

	public function accept($id){
		$q = $this->db->query("Update application set status='1' where id = '$id' ");
		return TRUE;
	}
	public function delete($id){
		$q = $this->db->query("Update application set status='2' where id = '$id' ");
		return TRUE;
	}
}