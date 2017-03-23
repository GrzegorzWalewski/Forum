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
		public function wpis($id,$text)//Updatuje post
	{
		$this->db->set('text',$text);
		$this->db->where('id', $id);
		$this->db->update('wpisy');
	}
}