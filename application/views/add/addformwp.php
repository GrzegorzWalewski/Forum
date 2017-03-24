<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>Dodawanie Wpisu</title>
</head>
<body>
<h1>Dodaj Wpis</h1>
<?php
	$attributes=array('id' => 'addform','method'=>'post');
	echo form_open('add/wpis',$attributes);
	echo form_hidden('authorname',$username);
	echo form_hidden('time',date("Y-m-d G:i:s"));
	echo "Wpis:</br>";
	echo form_textarea('text');
	echo form_hidden('postyid',$postid);
	echo form_submit('submit','Dodaj Wpis');
	echo form_close();
?>

</body>
</html>