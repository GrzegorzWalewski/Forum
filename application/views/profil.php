<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/css/style.css";?>"/>
</head>
<body>
<h3>Zalogowany jako: <a href="<?php echo base_url()?>index/userprofil/"><?php echo $username ?></a></h3>
<?php echo anchor('/auth/logout/', 'Wyloguj'); ?>
<div id="message">
<a href="<?php echo base_url()?>message">Wiadomości</a>
</div>
</body>
</html>
