<?php 
class equipments extends CI_controller{ 
function __construct(){ 
		parent::__construct(); 
} 
public function index(){
  if($this->input->post('equipments')){
    $idequipments = $this->input->post('idequipments');
    $equipName = $this->input->post('equipName');
    $equipModel = $this->input->post('equipModel');
    $subCategory_idsubcat = $this->input->post('subCategory_idsubcat');
    $data = array(
		  'idequipments'=>$idequipments,
		  'equipName'=>$equipName,
		  'equipModel'=>$equipModel,
		  'subCategory_idsubcat'=>$subCategory_idsubcat,
		  ); 
    $this->load->database(); 
    $this->db->insert('equipments',$data); 
}
else{
  $this->load->view('equipments');
		}
	}
}
