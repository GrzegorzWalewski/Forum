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
		$this->db->select('id, name,SUBSTRING(tresc,1,35) as tresc, authorname, actudate, odp, wys');
		$this->db->where('watkiid',$adress);
		$s=$this->db->get('posty');
		$s->result();
		return $s;
	}
	public function posty($adress)//pobiera posty
	{
		$this->db->select('id, name,tresc, authorname, watkiid');
		$this->db->where('id',$adress);
		$s=$this->db->get('posty');
		$s->result();
		return $s;
	}
	public function wpisy($adress)//pobiera wpisy przypisane do danego posta
	{
		$this->db->select('id, addtime, authorname, text');
		$this->db->where('postyid',$adress);
		$s=$this->db->get('wpisy');
		$s->result();
		return $s;
	}
	public function searchus($us)//pobiera wyniki wyszukiwania w kategorii urzytkownicy
	{
		$this->db->select('authorname, id');
		$this->db->like('authorname',$us);
		$this->db->or_like('authormail',$us);
		$s=$this->db->get('author');
		return $s;
	}
	public function searchwa($wa)//pobiera wyniki wyszukiwania w kategorii wątki
	{
		$this->db->select('name, id, posts');
		$this->db->like('name',$wa);
		$s=$this->db->get('watki');
		return $s;
	}
	public function searchpo($po)//pobiera wyniki wyszukiwania w kategorii posty
	{
		$this->db->select('name, id');
		$this->db->like('name',$po);
		$this->db->or_like('tresc',$po);
		$s=$this->db->get('posty');
		return $s;
	}
	public function searchwp($wp)//pobiera wyniki wyszukiwania w kategorii wpisy
	{
		$this->db->select('text, id, postyid');
		$this->db->like('text',$wp);
		$s=$this->db->get('wpisy');
		return $s;
	}
	public function allwatki()//pobiera wątki oznaczone jako ważne
	{
		$this->db->select('name,startdate,authorname,actudate,posts,id,categoryid');
		$s=$this->db->get('watki');
		$s->result();
		return $s;
	}
		public function categories()//pobiera wątki oznaczone jako ważne
	{
		$s=$this->db->get('categories');
		$s->result();
		return $s;
	}
}

?>