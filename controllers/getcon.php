<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class getcon extends CI_Controller {
	function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('tank_auth');
	}
	public function index()
	{	
		$this->load->model('getmess_model');
		$data['messages']=$this->getmess_model->get15();
		$this->load->view('main',$data);
	}
}