<?php 
class subCategory extends CI_controller{ 
function __construct(){ 
		parent::__construct(); 
} 
public function index(){
if($this->input->post('subCategory')){
$idsubcat = $this->input->post('idsubcat');
$subCatName = $this->input->post('subCatName');
$category_idcategory = $this->input->post('category_idcategory');
$data = array(
'idsubcat'=>$idsubcat,
'subCatName'=>$subCatName,
'category_idcategory'=>$category_idcategory,
); 
$this->load->database(); 
$this->db->insert('subCategory',$data); 
}
else{
$this->load->view('subCategory');
		}
	}
}
