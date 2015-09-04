<?php 
class category extends CI_controller{ 
function __construct(){ 
		parent::__construct(); 
} 
public function index(){
if($this->input->post('category')){
$idcategory = $this->input->post('idcategory');
$catName = $this->input->post('catName');
$data = array(
'idcategory'=>$idcategory,
'catName'=>$catName,
); 
$this->load->database(); 
$this->db->insert('category',$data); 
}
else{
$this->load->view('category');
		}
	}
}
