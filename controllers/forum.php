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
		$this->load->view('profil',$dane);
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
		if (!$this->tank_auth->is_logged_in()&&$this->input->get('addpost',TRUE))
		{
		redirect('/forum/loginform','refresh');
		}
	}
	public function loginform()
	{
		echo "TO DZIALAAAAAAAAAAAAAAAAAAAAAAAAAAA";
	}
}