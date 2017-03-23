<?php
Class upload_Model extends CI_Model
{
		function _construct(){
			parent::_construct;
			$this->load->database();
		}
	public function watek($username,$time,$name,$important)//Dodaje wątek
	{
		$data=array(
			'name'=>$name,
			'authorname'=>$username,
			'startdate'=>$time,
			'important'=>$important
			);
		$this->db->insert('watki',$data);
	}
	public function post($username,$time,$name,$watkiid)//Dodaje posta
	{
		$data=array(
			'name'=>$name,
			'authorname'=>$username,
			'starttime'=>$time,
			'watkiid'=>$watkiid
			);
		$this->db->insert('posty',$data);
	}
	public function wpis($authorname,$time, $text, $postyid)//Dodaje wpis
	{
		$data=array(
			'addtime'=>$time,
			'authorname'=>$authorname,
			'text'=>$text,
			'postyid'=>$postyid
			);
		$this->db->insert('wpisy',$data);
	}
}

?>