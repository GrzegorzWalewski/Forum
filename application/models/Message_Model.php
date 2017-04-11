<?php
Class Message_Model extends CI_Model
{
		function _construct(){
			parent::_construct;
			$this->load->database();
		}
public function getmessages($username)
	{
		$this->db->where('messto',$username);
		$s=$this->db->get('messages');
		return $s;
	}
	public function gettresc($id,$username)
	{
		$this->db->where('messto',$username);
		$this->db->where('id',$id);
		$s=$this->db->get('messages');
		return $s;
	}
	public function send($to,$from,$title,$tresc)
	{
		$array=array(
			'messto'=>$to,
			'messfrom'=>$from,
			'title'=>$title,
			'tresc'=>$tresc
			);
		$this->db->insert('messages', $array);
	}
	public function viewed($username,$id)
	{
		$this->db->set('view','1');
		$this->db->where('id',$id);
		$this->db->where('messto',$username);
		$this->db->update('messages');
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('messages');
	}
	public function getusers()
	{
		$this->db->select('username');
		$s=$this->db->get('author');
		return $s;
	}
}