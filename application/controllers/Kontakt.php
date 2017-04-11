<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontakt extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['base_url']=base_url();
		$this->load->view('Kontakt',$data);
	}
	public function send()
	{
		$data['to']="Grzegorz";
		$data['from']=$this->tank_auth->get_username();
		$this->load->view('replyform',$data);
	}
}