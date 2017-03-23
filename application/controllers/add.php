<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class add extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}
	public function watekform()
	{
		$data['username']=$this->tank_auth->get_username();
		$this->load->view('add/addformw',$data);
	}
	public function postform()
	{
		$data['username']=$this->tank_auth->get_username();
		$data['watkiid']=$this->uri->segment(3);
		$this->load->view('add/addformp',$data);
	}
		public function wpisform()
	{
		$data['username']=$this->tank_auth->get_username();
		$data['postid']=$this->uri->segment(3);
		$this->load->view('add/addformwp',$data);
	}
	public function watek()
	{
		$username=$this->input->post('username');
		$time=$this->input->post('time');
		$name=$this->input->post('name');
		$important=$this->input->post('important');
		$this->load->model('upload_Model');
		$this->upload_Model->watek($username,$time,$name,$important);
	}
	public function post()
	{
		$username=$this->input->post('username');
		$time=$this->input->post('time');
		$name=$this->input->post('name');
		$watkiid=$this->input->post('watkiid');
		$this->load->model('upload_Model');
		$this->upload_Model->post($username,$time,$name,$watkiid);
	}
	public function wpis()
	{
		$authorname=$this->input->post('authorname');
		$time=$this->input->post('time');
		$text=$this->input->post('text');
		$postyid=$this->input->post('postyid');
		$this->load->model('upload_Model');
		$this->upload_Model->wpis($authorname,$time, $text, $postyid);
	}
}