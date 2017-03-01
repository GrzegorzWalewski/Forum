<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forum extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}
	public function index()
	{
		$this->load->view('controller');		
	}
	public function regulamin()
	{
		$this->load->view('guest');
	}
	public function kupa(){$this->load->view('guest');}
}