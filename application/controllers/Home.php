<?php

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function index(){

		$this->load->model('imagesmodel');
		$data['query'] = $this->imagesmodel->getallmainimages();
		//$this->load->view("home", $data);
		$this->load->model('homemodel');
		$data['catlist'] = $this->homemodel->getmaincategories();
		$this->load->view("home", $data);	

	}

	public function pages(){
		$catNumber = $this->input->get("pageid");
		$this->load->model('pagemodel');
		$data['items'] = $this->pagemodel->getpageitems($catNumber);
		$this->load->view('home',$data);
	}
}