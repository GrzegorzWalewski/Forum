<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>Dodawanie Posta</title>
</head>
<body>
<h1>Dodaj Post</h1>
<?php
	$attributes=array('id' => 'addform','method'=>'post');
	echo form_open('add/post',$attributes);
	echo form_hidden('username',$username);
	echo form_hidden('time',date("Y-m-d"));
	echo "Nazwa posta: ";
	echo form_input('name');
	echo form_hidden('watkiid',$watkiid);
	echo form_submit('submit','Dodaj Posta');
?>

</body>
</html>