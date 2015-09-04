<?php

class pagemodel extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function getpageitems($pid){
		$query = $this->db->query("SELECT distinct subcat.subCatName, img.imagePath, subcat.idsubcat from category cat, subCategory subcat, equipments equip, Images img, features fea where subcat.idsubcat = equip.subCategory_idsubcat AND equip.subCategory_idsubcat = img.equipments_idequipments AND subcat.category_idcategory = ".$pid.";");

		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}

			return $data;
		}
	}
}