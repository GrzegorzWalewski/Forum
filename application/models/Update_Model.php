<?php
Class Update_Model extends CI_Model
{
		function _construct(){
			parent::_construct;
			$this->load->database();
		}
	public function post($id,$name,$time)//Updatuje post
	{
		$array=array(
			'name'=>$name,
			'actudate'=>$time
			);
		$this->db->where('id', $id);
		$this->db->update('posty', $array);
	}
}