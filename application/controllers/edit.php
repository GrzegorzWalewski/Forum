<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}
	public function postform()
	{
		$data['id']=$this->input->post('id');
		$data['name']=$this->input->post('name');
		$this->load->view('edit/editformp',$data);
	}
	public function post()
	{
		$time=$this->input->post('time');
		$name=$this->input->post('name');
		$id=$this->input->post('id');
		$array=array(
			'name'=>$name,
			'actudate'=>$time
			);
		$this->db->where('id', $id);
		$this->db->update('posty', $array);
	}
}
