<?php

class subpageModel extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function getsubitems($subid){
		$query = $this->db->query('');
		if($query->num_row > 0){
			foreach ($query->result() as $rows) {
				$data[] = $row;
			}
		}

		return $data;
	}
}