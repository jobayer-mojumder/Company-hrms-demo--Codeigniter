<?php

class Lunch extends CI_Model
{
	public function lunch_view($id, $date){
		$q=$this->db->query("select * from lunch where employee_id = '$id' and order_date = '$date' and status='1'");
		$result = $q->result();
		return $q->num_rows();
	}
	public function order($id, $date){
		$q=$this->db->query("insert into lunch(employee_id, order_date, status) values(
			'$id', '$date', '1'	)");
		return TRUE;
	}

	public function delete_order($id, $date){
		$q=$this->db->query("update lunch set status='0' where employee_id= '$id' and order_date = '$date' and status='1'");
		return TRUE;
	}

	public function all_order($date){
		$q=$this->db->query("select lunch.order_date, user_table.fullname, lunch.regtime from lunch join user_table on lunch.employee_id=user_table.user_id  where lunch.order_date = '$date' and lunch.status='1'");
		return $q->result();
	}
}