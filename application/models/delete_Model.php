<?php
Class delete_Model extends CI_Model
{
		function _construct(){
			parent::_construct;
			$this->load->database();
		}
		public function post($id,$reid)//Usuwa wybranego posta i wszystkie przypisane do niego wpisy
		{
			$this->db->where('id',$id);
			$this->db->delete('posty');
			$this->db->where('postyid',$id);
			$this->db->delete('wpisy');
			$this->db->set('posts','posts-1',FALSE);
			$this->db->where('id', $reid);
			$this->db->update('watki');
		}
		public function wpis($id,$reid)//Usuwa wybrany wpis i odejmuje 1 odp przy wyświetlaniu postów
		{
			$this->db->set('odp','odp-1',FALSE);
			$this->db->where('id', $reid);
			$this->db->update('posty');

			$this->db->where('id',$id);
			$this->db->delete('wpisy');
		}
}