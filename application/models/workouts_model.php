<?php

class Workouts_model extends CI_Model {

	function getData() {
			$this->db->order_by('id', 'DESC');
			$this->db->select('id, arms, chest, legs, abbs, back');
		$q = $this->db->get('workouts');

		if($q->num_rows() > 0) {
				foreach ($q->result() as $row) {
					$data[] = $row;
				}

			return $data;
		}
	}

	function getInfo() {
			$this->db->order_by('id', 'DESC');
			$this->db->select('id, name, email, job_description, phone');
  
	$q = $this->db->get('employees');
	
		if($q->num_rows() > 0) {
				foreach ($q->result() as $row) {
					$data[] = $row;
				}
			return $data;
		}
	}

	function add_record($data) {
		$this->db->insert('employees', $data);
		return;
	}

	function add_workout($data) {
		$this->db->insert('workouts', $data);
		return;
	}
	
}
