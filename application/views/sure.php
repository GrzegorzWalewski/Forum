<!DOCTYPE html>
<html lang="pl">
<head>
<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
</head>
<body>
<?php
	$attributes=array('id' => 'sureform','method'=>'post');
	echo form_open("del/$name",$attributes);
	echo "Czy na pewno chcesz usunąć ".$name;
	echo form_hidden('id',$id);
	echo form_hidden('reid',$reid);
	echo form_submit('submit','Tak');
	echo form_submit('submit','Nie');
	echo form_close();
?>
</body>
</html>