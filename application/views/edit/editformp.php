<!DOCTYPE html>
<html lang="pl">
<head>
<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/css/style.css";?>"/>
<meta cherset="utf-8">
<title>Edytowanie Posta</title>
</head>
<body>
<h1>Edytuj Post</h1>
<?php
	$attributes=array('id' => 'addform','method'=>'post');
	echo form_open('edit/post',$attributes);
	echo form_hidden('time',date("Y-m-d G:i:s"));
	echo "Nazwa posta: ";
	echo form_input('name',$name);
	echo form_hidden('id',$id);
	echo form_submit('submit','Edytuj Posta');
	echo form_close();
?>

</body>
</html>