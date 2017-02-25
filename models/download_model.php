<?php
Class download_model extends CI_Model
{
	function _construct(){
		parent::_construct;
		$this->load->database();
	}
public function wazne(){
	$this->db->select('name,startdate,authorname,actudate,posts');
	$this->db->where('important=1');
	$s=$this->db->get('watki');
	$s->result();
	return $s;
}
public function newer(){
	$this->db->select('id,SUBSTRING(name,1,10) as name,authorname,actudate');
	$this->db->order_by('actudate');
	$s=$this->db->get('watki');
	return $s;

}
}

?>