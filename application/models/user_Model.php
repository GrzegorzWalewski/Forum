<?php
Class user_Model extends CI_Model
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
		$r=$s->row();
		$d=$r->role;
		return $d;
	}
	public function getinfo($username)
	{
		$this->db->select('authorname, description, authormail, last_login, created');
		$this->db->where('authorname',$username);
		$s=$this->db->get('author');
		$s->result();
		return $s;
	}
	public function addopis($id, $opis)
	{
		$this->db->set('description',$opis);
		$this->db->where('id',$id);
		$this->db->update('author');
	}
	public function lastwatki($username)
	{
		$this->db->select('name, id, posts');
		$this->db->where('authorname',$username);
		$s=$this->db->get('watki');
		return $s;
	}
	public function lastposty($username)
	{
		$this->db->select('name, id');
		$this->db->where('authorname',$username);
		$s=$this->db->get('posty');
		return $s;
	}
		public function lastwpisy($username)
	{
		$this->db->select('text, id, postyid');
		$this->db->where('authorname',$username);
		$s=$this->db->get('wpisy');
		return $s;
	}
}