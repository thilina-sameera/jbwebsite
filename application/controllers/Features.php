<?php 
class features extends CI_controller{ 
function __construct(){ 
		parent::__construct(); 
} 
public function index(){
if($this->input->post('features')){
$idfeatures = $this->input->post('idfeatures');
$featureTitle = $this->input->post('featureTitle');
$equipments_idequipments = $this->input->post('equipments_idequipments');
$data = array(
'idfeatures'=>$idfeatures,
'featureTitle'=>$featureTitle,
'equipments_idequipments'=>$equipments_idequipments,
); 
$this->load->database(); 
$this->db->insert('features',$data); 
}
else{
$this->load->view('features');
		}
	}
}
