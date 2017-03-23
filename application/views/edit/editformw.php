<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>Edytowanie Wpisu</title>
</head>
<body>
<h1>Edytuj wpis</h1>
<?php
	$attributes=array('id' => 'editform','method'=>'post');
	echo form_open('edit/wpis',$attributes);
	echo form_hidden('time',date("Y-m-d"));
	echo "Wpis:</br>";
	echo form_textarea('text',$text);
	echo form_hidden('id',$id);
	echo form_submit('submit','Edytuj Wpis');
	echo form_close();
?>

</body>
</html>