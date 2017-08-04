<?php
Class Root_Model extends CI_Model
{
		function _construct(){
			parent::_construct;
			$this->load->database();
		}
		
}