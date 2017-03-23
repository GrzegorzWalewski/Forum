<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class del extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}
	public function post()//Pobiera dane z formularza, wyświetla widok "Czy jesteś pewien?" i usuwa posta
	{
		$data['reid']=$this->input->post('reid');
		$data['id']=$this->input->post('id');
		$data['name']="post";
		$this->load->view('sure',$data);
		$sure=$this->input->post('submit');
		$id=$this->input->post('id');
		$reid=$this->input->post('reid');
		if($sure=="Tak")
		{
			$this->load->model('delete_Model');
			$this->delete_Model->post($id);
			redirect("/index/watki/$reid");
		}
		else if($sure=="Nie")
		{
			redirect("/index/watki/$reid");
		}
	}
	public function wpis()//Pobiera dane z formularza, wyświetla widok "Czy jesteś pewien?" i usuwa wpis
	{
		$data['id']=$this->input->post('id');
		$data['name']="wpis";
		$this->load->view('sure',$data);
		$sure=$this->input->post('submit');
		$id=$this->input->post('id');
		if($sure=="Tak")
		{
			$this->load->model('delete_Model');
			$this->delete_Model->wpis($id);
		}
		redirect('/default/');
	}
}
