<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}
	public function index()
	{
		//$this->load->view('search');	
		if ($this->input->get('addpost',TRUE))
		{
			if(!$this->tank_auth->is_logged_in())
			{
				redirect('/auth/login/');
			}
			else{redirect('/forum/addpostform','refresh');}
		}
	}
	public function watki()
	{	
		$this->load->model('download_Model');
		$adress=$this->uri->segment(3);
		$data['watek']=$this->download_Model->getwatek($adress);
		$data['posty']=$this->download_Model->getposts($adress);
		$this->load->view('controller',$data);
	}
	public function primary()
	{
		$this->load->model('download_model');
		$data['wazne']=$this->download_model->wazne();
		$this->load->view('tresc',$data);
	}
	public function who()
	{
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
	}
	public function newer()
	{
		$this->load->model('download_model');
		$data['new']=$this->download_model->newer();
		$data['curtime']=date("Y-m-d H:i:s");
		$this->load->view('news',$data);
	}
	public function posty()
	{
		$this->load->model('download_Model');
		$adress=$this->uri->segment(3);
		$data['posty']=$this->download_Model->posty($adress);
		$data['wpisy']=$this->download_Model->wpisy($adress);
		$this->load->view('controller',$data);
	}
	public function userrole()
	{
				$userid=$this->tank_auth->get_user_id();
				$this->load->model('user_Model');
				$data['role']=$this->user_Model->getrole($userid);
				$this->load->view('rolebutton',$data);
	}
	public function addwatek()
	{
		$data['userid']=$this->tank_auth->get_user_id();
		$this->load->view('addformw',$data);
	}
}