<?php

class subpagemodel extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function getsubitems($subid){
		$query = $this->db->query('SELECT equip.equipName, equip.equipModel, img.ImagePath  FROM subCategory sub, equipments equip, Images img where sub.idsubcat = equip.subCategory_idsubcat AND equip.idequipments = img.equipments_idequipments AND sub.idsubcat = '.$subid.';');
		if($query->num_row > 0){
			foreach ($query->result() as $rows) {
				$data[] = $row;
			}
		}

		return $data;
	}
}