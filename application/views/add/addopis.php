<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>Dodawanie Opisu</title>
<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/css/style.css";?>"/>
</head>
<body>
<h1>Dodaj Swój opis</h1>
<?php
	$attributes=array('id' => 'addform','method'=>'post');
	echo form_open('add/opis',$attributes);
	echo "Opis: ";
	echo form_textarea('opis');
	echo form_submit('submit','Dodaj Posta');
	echo form_close();
?>

</body>
</html>