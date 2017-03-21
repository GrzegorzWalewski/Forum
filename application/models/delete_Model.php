<?php
Class delete_Model extends CI_Model
{
		function _construct(){
			parent::_construct;
			$this->load->database();
		}
		public function post($id)//usuwa wybranego posta i wszystkie przypisane do niego wpisy
		{
			$this->db->where('id',$id);
			$this->db->delete('posty');
			$this->db->where('postyid',$id);
			$this->db->delete('wpisy');
		}
}