<?php

class pages extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$catNumber = $this->input->get("pageid");
		$this->load->model('pagemodel');
		$data['items'] = $this->pagemodel->getpageitems($catNumber);
		$this->load->view('home',$data);
	}

}