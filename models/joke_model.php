<?php
Class joke_model extends CI_Model
{
	function _construct(){
		parent::_construct;
		$this->load->database();
	}
	function getjokes()
	{
		$this->load->database();
		try{
			$this->db->select('joke.id, joketext, rate, authorname, authormail');
			$this->db->join('author','authorid=author.id','inner');
			$this->db->where('visible','1');
			$s=$this->db->get('joke');
	}
	catch(PDOException $e){
	return ERROR;
	exit();
	}
return $s;
		
	}
	function add()
	{	
		$this->load->database();
		$this->db->select('name,id');
		$s=$this->db->get('category');
		return $s;
	}
	public function addform($joketext,$categoryid,$user_id)
	{	
		$data=array(
			'joketext'=>$joketext,
			'jokedata'=>date("Y-m-d"),
			'authorid'=>$user_id
			);
		$this->db->insert('joke',$data);
		$lastid=$this->db->insert_id();
		foreach($categoryid as $cid)
		{
		$data=array(
			'jokeid'=>$lastid,
			'categoryid'=>$cid,
			);
		$this->db->insert('jokecategory',$data);
		}

	}
	}
