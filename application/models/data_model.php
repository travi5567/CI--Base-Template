<?php

class Data_model extends CI_Model {
	
	function getAll() {
		$q = $this->db->get('employees');

		if($q->num_rows() > 0) {
				foreach ($q->result() as $row) {
					$data[] = $row;
				}
			return $data;
		}
	}

	function add_record($data) {
		$this->db->insert('workouts', $data);
		return;
	}

}


