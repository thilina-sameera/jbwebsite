<?php 
class longDescription extends CI_controller{ 
function __construct(){ 
		parent::__construct(); 
} 
public function index(){
if($this->input->post('longDescription')){
$idlongDescription = $this->input->post('idlongDescription');
$text = $this->input->post('text');
$equipments_idequipments = $this->input->post('equipments_idequipments');
$data = array(
'idlongDescription'=>$idlongDescription,
'text'=>$text,
'equipments_idequipments'=>$equipments_idequipments,
); 
$this->load->database(); 
$this->db->insert('longDescription',$data); 
}
else{
$this->load->view('longDescription');
		}
	}
}
