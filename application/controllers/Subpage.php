<?php

class subpage extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}


	public function index(){
		$subnum = $this->input->get('subpage');
		$this->load->model('subpagemodel');
		$data['subpage'] = $this->subpagemodel->getsubitems($subnum);
		$this->load->view('home', $data);
	}
}