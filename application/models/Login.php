<?php

class Login extends CI_Model
{
	
	public function auth($email, $password){
		$q = $this->db->where(['email'=>$email, 'password'=>$password])->get('user_table');
		$result = $q->result();
		if($q->num_rows()){
			return $q->row()->user_id;	
		}
		else{
			return FALSE;
		}
	}

	public function type($id){
		$q = $this->db->where(['user_id'=>$id])->get('user_table');
		$result = $q->result();
		if($q->num_rows()){
			return $q->row()->user_type;	
		}
		else{
			return FALSE;
		}
	}
}