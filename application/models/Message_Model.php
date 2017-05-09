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
		$this->db->where('delto',0);
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
	public function delete($id,$type)
	{
		$this->db->where('id',$id);
		if($type=="S")
		{
			$this->db->set('delfrom',1);
		}
		else if($type=="G")
		{
			$this->db->set('delto',1);
		}
		$this->db->update('messages');
		$this->db->where('id',$id);
		$this->db->select('delto, delfrom');
		$s=$this->db->get('messages');
		$row=$s->row(0);
		if($row->delto)
		{
			if($row->delfrom)
			{
				$this->db->where('id',$id);
				$this->db->delete('messages');
			}
		}
	}
	public function getusers()
	{
		$this->db->select('username');
		$s=$this->db->get('author');
		return $s;
	}
	public function getsended($usr)
	{
		$this->db->where('messfrom',$usr);
		$this->db->where('delfrom',0);
		$s=$this->db->get('messages');
		return $s;
	}
}