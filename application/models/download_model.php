<?php
Class download_model extends CI_Model
{
		function _construct(){
			parent::_construct;
			$this->load->database();
		}
	public function wazne()//pobiera wątki oznaczone jako ważne
	{
		$this->db->select('name,startdate,authorname,actudate,posts,id');
		$this->db->where('important=1');
		$s=$this->db->get('watki');
		$s->result();
		return $s;
	}
	public function newer()//Pobiera najnowsze wpisy
	{
		$this->db->select('id,SUBSTRING(name,1,10) as name,authorname,actudate');
		$this->db->order_by('actudate');
		$s=$this->db->get('watki');
		return $s;

	}
	public function getwatek($adress)//pobiera dane wątku o danej nazwie
	{
		$this->db->select('name,authorname,id');
		$this->db->where('id',$adress);
		$s=$this->db->get('watki');
		$s->result();
		return $s;
	}
	public function getposts($adress)//pobiera posty przypisane do danego wątku
	{
		$this->db->select('id, name, authorname, actudate, odp, wys');
		$this->db->where('watkiid',$adress);
		$s=$this->db->get('posty');
		$s->result();
		return $s;
	}
	public function posty($adress)
	{
		$this->db->select('id, name, authorname');
		$this->db->where('id',$adress);
		$s=$this->db->get('posty');
		$s->result();
		return $s;
	}
	public function wpisy($adress)
	{
		$this->db->select('id, addtime, authorname, text');
		$this->db->where('postyid',$adress);
		$s=$this->db->get('wpisy');
		$s->result();
		return $s;
	}
}

?>