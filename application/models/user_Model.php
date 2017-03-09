<?php
Class download_model extends CI_Model
{
		function _construct(){
			parent::_construct;
			$this->load->database();
		}
	public function getrole($userid)//Pobiera rolę przypisaną do urzytkownika
	{
		$this->db->select('role');
		$this->db->where('id',$userid);
		$s=$this->db->get('author');
		$r=$s->result();
		return $r;
	}
}