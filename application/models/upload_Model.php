<?php
Class upload_Model extends CI_Model
{
		function _construct(){
			parent::_construct;
			$this->load->database();
		}
	public function watek($username,$time,$name,$important)
	{
		$data=array(
			'name'=>$name,
			'authorname'=>$username,
			'startdate'=>$time,
			'important'=>$important
			);
		$this->db->insert('watki',$data);
	}
	public function post($username,$time,$name,$watkiid)
	{
		$data=array(
			'name'=>$name,
			'authorname'=>$username,
			'starttime'=>$time,
			'watkiid'=>$watkiid
			);
		$this->db->insert('posty',$data);
	}
}

?>