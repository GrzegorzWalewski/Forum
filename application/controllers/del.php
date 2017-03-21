<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class del extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}
	public function post()
	{
		$data['id']=$this->input->post('id');
		$this->load->view('sure',$data);
		$sure=$this->input->post('submit');
		$id=$this->input->post('id');
		if($sure=="Tak")
		{
			$this->load->model('delete_Model');
			$this->delete_Model->post($id);
		}
	}
}
