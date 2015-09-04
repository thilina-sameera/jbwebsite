<?php

class imagesmodel extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function getallmainimages(){
		$query = $this->db->query("SELECT imagePath FROM `Images` WHERE idImages = 1 OR idImages = 9 OR idImages = 14 OR idImages = 25 OR idImages = 31 OR idImages = 42 OR idImages = 50;");

		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}

			return $data;
		}
	}
}