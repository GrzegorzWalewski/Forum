<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>Dodawanie Posta</title>
<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/css/style.css";?>"/>
<body>
<h1>Dodaj Post</h1>
<?php
	$attributes=array('id' => 'addform','method'=>'post');
	echo form_open('add/post',$attributes);
	echo form_hidden('username',$username);
	echo form_hidden('time',date("Y-m-d"));
	echo "Nazwa posta: ";
	echo form_input('name');
	echo "Treść posta: ";
	echo form_textarea('tresc');
	echo form_hidden('watkiid',$watkiid);
	echo form_submit('submit','Dodaj Posta');
	echo form_close();
?>

</body>
</html>