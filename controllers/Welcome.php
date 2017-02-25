<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}
	public function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
		redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
		$this->load->model('joke_model');
		$data['jokes']=$this->joke_model->getjokes();
		$this->load->view('joke',$data);
		if(isset($_GET['add']))
		{	
			$data['categories']=$this->joke_model->add();
			$this->load->view('addform',$data);
		}
		if(isset($_GET['addform']))
		{	
			$userid=$data['user_id'];
			$joketext=$_POST['joketext'];
			$categoryid=$_POST['categories'];
			$this->joke_model->addform($joketext,$categoryid,$userid);
		}
		if(isset($_POST['rate'])&&isset($_POST['id'])&&$_POST['id']!='')
		{
			
		}
	}
}
}
