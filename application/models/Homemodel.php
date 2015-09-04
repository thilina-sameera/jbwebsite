<?php

class homemodel extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function getmaincategories(){
		$query = $this->db->query("SELECT idcategory, catName from category;");

		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}

			return $data;
		}
	}
}