<?php
Class send_model extends CI_Model
{
	function _construct(){
		parent::_construct;
		$this->load->database();
	}
	function sendmess($message,$authorid){
		$data=array(
			'authorid'=>$authorid,
			'message'=>$message,
			'date'=>date("Y-m-d h:i:s"),
			);
		$this->db->insert('messages',$data);
	}
}