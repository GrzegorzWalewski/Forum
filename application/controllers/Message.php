<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}
	public function index()
	{
		$username=$this->tank_auth->get_username();
		$this->load->model("user_Model");
		$data['messages']=$this->user_Model->getmessages($username);
		$this->load->view('messages',$data);	
	}
	public function gettresc()
	{
		$username=$this->tank_auth->get_username();
		$id=$this->uri->segment(3);
		$this->load->model('user_Model');
		$data['message']=$this->user_Model->gettresc($id,$username);
		$this->load->view('Onemessage',$data);
	}
	public function sendform()
	{
		$data['to']=$this->uri->segment(3);
		$data['from']=$this->tank_auth->get_username();
		$this->load->view('sendform',$data);
	}
	public function send()
	{
		$to=$this->input->post('to');
		$from=$this->input->post('from');
		$title=$this->input->post('title');
		$tresc=$this->input->post('tresc');
		$this->load->model('user_Model');
		$this->user_Model->send($to,$from,$title,$tresc);
		redirect(base_url().'message');
	}
}