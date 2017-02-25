<?php
Class getmess_model extends CI_Model
{
	function _construct(){
		parent::_construct;
		$this->load->database();
	}
public function get15(){
	$this->db->select('messages.id,date,message,authorname');
	$this->db->join('author','authorid=author.id','inner');
	$this->db->from('messages');
	$this->db->order_by("id","desc");
	$this->db->limit(15);
	$s=$this->db->get();
	$s->result();

	return $s;
}
}

?>