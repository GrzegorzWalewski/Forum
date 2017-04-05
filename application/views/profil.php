<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
</head>
<body>
<h3>Zalogowany jako: <a href="<?php echo base_url()?>index/userprofil/"><?php echo $username ?></a></h3>
<?php echo anchor('/auth/logout/', 'Wyloguj'); ?>
<div id="message">
<a href="<?php echo base_url()?>message">Wiadomości</a>
</div>
</body>
</html>
