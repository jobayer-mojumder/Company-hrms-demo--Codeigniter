<?php

class Employee extends CI_Model
{
	public function new_employee($fullName, $email, $contact, $joiningDate, $designation, $userType, $password){
		$this->db->query("insert into user_table(fullname, email, contact, password, joining_date, designation, user_type, status) Values('$fullName', '$email', '$contact', '$password', '$joiningDate', '$designation', '$userType', '1')");
		return TRUE;
	}

	public function getAll(){
		$q = $this->db->query("select * from user_table where user_type != '1'");
		return $q->result();
	}

	public function get($id){
		$q = $this->db->query("select * from user_table where user_id = $id");
		return $q->result();
	}
	public function edit_employee($fullName, $email, $contact, $joiningDate, $designation, $userType, $id)
	{
		$this->db->query("Update user_table set fullname='$fullName', email='$email', contact='$contact', joining_date='$joiningDate', designation='$designation', user_type='$userType' where user_id = '$id' ");
		return true;
	}
}