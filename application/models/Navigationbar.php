<?php  

class navigationbar extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function getcategories(){
		$query = $this->db->query("SELECT catName from category;");
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$data[] = $row->catName;
			}

			return $data;
		}
	}

	public function getsubcategories($name){
		$query = $this->db->query("SELECT s.subCatName from category c, subCategory s where c.catName = $name;");
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$data[] = $row->subCatName;
			}

			return $data;
		}
	}
}