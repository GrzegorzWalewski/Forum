<?php
function exist($name,$password)
{
	include $_SERVER['DOCUMENT_ROOT'].'/inc/logintodb.inc.php';
	$sql='SELECT COUNT(*) FROM author WHERE PASSWORD=:pass AND authorname=:name or authormail=:name';
	$s=$pdo->prepare($sql);
	$s->bindValue(":pass",$password);
	$s->bindValue(":name",$name);
	$s->execute();
	$result=$s->fetch();
	if ($result>0)
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}
if(isset($_POST['action'])&&$_POST['action']=="logout")
	{
	session_unset($SESSION['loginIn']);
	session_unset($SESSION['name']);
	header('Location: ' .$_POST['goto']);
	exit();
	}
	function userRole($Role){
		include $_SERVER['DOCUMENT_ROOT'].'/inc/logintodb.inc.php';
		if(isset($_POST['name']))
		{
			try{
				$sql='SELECT id from author where authorname=:name or authormail=:name';
				$s=$pdo->prepare($sql);
				$s->bindValue(":name",$_POST['name']);
				$s->execute();
			}
				catch(PDOExeption $e)
				{echo $e;}
				$row=$s->fetch();
			try{
				$sql='SELECT COUNT(*) FROM authorrole WHERE authorid=:id and roleid=:role';
				$s=$pdo->prepare($sql);
				$s->bindValue(":id",$row[0]);
				$s->bindValue(":role",$Role);
				$s->execute();}
				catch(PDOExeption $e)
				{echo $e;}
				$co=$s->fetch();
				if($co[0]>0)
				{return TRUE;}
				else{
					echo "</br>Nie masz uprawnien do tej strony";
					include '../logout.inc.html.php';
					return FALSE;
					
				}

		}
	}
