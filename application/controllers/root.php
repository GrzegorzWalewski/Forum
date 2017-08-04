<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Root extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}
	public function main()
	{
		$username=$this->tank_auth->get_username();
		if($this->tank_auth->is_logged_in()&&$username=="Root")
		{
			$this->load->view('root/main');
		}
		else{redirect('/index/trash','refresh');}
	}
}