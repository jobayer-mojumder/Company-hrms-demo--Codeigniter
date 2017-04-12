<?php

class Database extends CI_Model
{
	
	public function table(){
		$q = $this->db->query('CREATE TABLE IF NOT EXISTS user_table (
                        user_id INT AUTO_INCREMENT PRIMARY KEY,
                        fullname VARCHAR(255) NOT NULL,
						email VARCHAR(100) UNIQUE NOT NULL,
						contact VARCHAR(50) NOT NULL,
						password varchar(100) NOT NULL,
						joining_date varchar(100) NOT NULL,
						designation VARCHAR(100) NOT NULL,
                        user_type int(11) NOT NULL,
                        status INT NOT NULL,
                        regtime TIMESTAMP
                        )
                    ');
		$q = $this->db->query('CREATE TABLE IF NOT EXISTS task_table (
                        task_id INT AUTO_INCREMENT PRIMARY KEY,
                        task_title VARCHAR(255) NOT NULL,
						task_details TEXT NOT NULL,
						employee_id INT(11) NOT NULL,
						start_date varchar(100) NOT NULL,
						end_date varchar(100) NOT NULL,
						progress INT(11),
                        status INT NOT NULL,
                        regtime TIMESTAMP
                        )
                    ');

		$q = $this->db->query('CREATE TABLE IF NOT EXISTS application (
                        id INT AUTO_INCREMENT PRIMARY KEY,
						employee_id INT(11) NOT NULL,
						days int(11) NOT NULL,
						from_date varchar(100) NOT NULL,
						to_date varchar(100) NOT NULL,
						reason text not null,
						type varchar(255) not null,
                        status INT NOT NULL,
                        regtime TIMESTAMP
                        )
                    ');

		$q = $this->db->query('CREATE TABLE IF NOT EXISTS lunch (
                        id INT AUTO_INCREMENT PRIMARY KEY,
						employee_id INT(11) NOT NULL,
						order_date varchar(255) NOT NULL,
                        status INT NOT NULL,
                        regtime TIMESTAMP
                        )
                    ');

		return TRUE;
	}
}