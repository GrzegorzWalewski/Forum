<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}
	public function postform()//wyświetla formularz do edycji postów
	{
		$data['id']=$this->input->post('id');
		$data['name']=$this->input->post('name');
		$this->load->view('edit/editformp',$data);
	}
	public function wpisform()//wyświetla formularz do edycji postów
	{
		$data['id']=$this->input->post('id');
		$data['reid']=$this->input->post('reid');
		$data['text']=$this->input->post('text');
		$this->load->view('edit/editformw',$data);
	}
	public function post()//Pobiera dane z formularza i aktualizuje posta
	{
		$time=$this->input->post('time');
		$name=$this->input->post('name');
		$id=$this->input->post('id');
		$this->load->model('Update_Model');
		$this->Update_Model->post($id,$name,$time);
		redirect('/index/posty/1');	
	}
	public function wpis()//Pobiera dane z formularza i aktualizuje wpis
	{
		$text=$this->input->post('text');
		$id=$this->input->post('id');
		$reid=$this->input->post('reid');
		$this->load->model('Update_Model');
		$this->Update_Model->wpis($id,$text);
		redirect("/index/posty/$reid");
	}
}
