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
		if($this->tank_auth->is_logged_in())
			{
				$userid=$this->tank_auth->get_user_id();
				$this->load->model('user_Model');
				$data['role']=$this->user_Model->getrole($userid);
				$this->load->view('controller',$data);
			}
		else{
			$this->load->view('controller');
			}	
	}
}