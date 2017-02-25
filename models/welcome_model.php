<?php
Class welcome_model extends CI_Model{
	function _construct(){
		parent::_construct;
		$this->load->database();
	}
	public function get($id)
	{//pobiera dowcipy o podanym id
	}
	public function magickq(){
		if (get_magic_quotes_gpc())
		{
		$process=array(&$_GET, &$_POST, &$COOKIE, &$_REQUEST);
		while (list($key, $val)=each($process))
		{
		foreach ($val as $k=> $v)
		{
			unset($process[$key][$k]);
			if (is_array($v))
			{
				$process[$key][stripslashes($k)]=$v;
				$process[]= &$process[$key][stripslashes($k)];
			}
			else
			{
				$process[$key][stripslashes($k)]=[stripslashes($v)];
			}
		}
			}
		unset ($process);
		}
	}
	public function addform()
	{
		$this->load->database();
		$this->db->get('joke');
	}
}

