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
		$this->load->view('header');
		if ($this->tank_auth->is_logged_in())
		{
		$userid=$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$this->load->view('profil',$data);
		}
		else
		{
			$this->load->view('guest');
		}
		/*
		$this->load->view('search');
						*/
		$this->load->view('menu');
		$this->load->model('download_model');
		$data['wazne']=$this->download_model->wazne();
		$this->load->view('tresc',$data);
		$data['new']=$this->download_model->newer();
		$data['curtime']=date("Y-m-d H:i:s");
		$this->load->view('news',$data);
		if ($this->input->get('addpost',TRUE))
		{
			if(!$this->tank_auth->is_logged_in())
			{
		redirect('/auth/login/');
		}
		else{redirect('/forum/addpostform','refresh');}
		}
	}
	public function loginform()
	{
		$this->load->view('loginform');
	}
}