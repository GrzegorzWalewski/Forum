<?php
Class gett_model extends CI_Model
{
	function _construct(){
		parent::_construct;
	}
public function t(){
	$s=microtime();

	return $s;
}
}

?>