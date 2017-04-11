<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
		$this->load->model('Message_Model');
	}
	public function index()
	{
		$username=$this->tank_auth->get_username();
		$data['messages']=$this->Message_Model->getmessages($username);
		$this->load->view('messages',$data);	
	}
	public function gettresc()
	{
		$username=$this->tank_auth->get_username();
		$id=$this->uri->segment(3);
		$this->Message_Model->viewed($username,$id);
		$data['message']=$this->Message_Model->gettresc($id,$username);
		$this->load->view('Onemessage',$data);
	}
	public function replyform()
	{
		$data['to']=$this->uri->segment(3);
		$data['from']=$this->tank_auth->get_username();
		$this->load->view('replyform',$data);
	}
	public function reply()
	{
		$to=$this->input->post('to');
		$from=$this->input->post('from');
		$title=$this->input->post('title');
		$tresc=$this->input->post('tresc');
		$this->Message_Model->send($to,$from,$title,$tresc);
		redirect(base_url().'message');
	}
	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->Message_Model->delete($id);
		redirect(base_url().'message');
	}
	public function sendform()
	{
		$data['from']=$this->tank_auth->get_username();
		//$data['usernames']=$this->Message_Model->getusers(); W późniejszym czasie podczas wpisywania pojawią się pospowiedzi
		$this->load->view('sendform',$data);
	}
}