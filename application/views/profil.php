<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
</head>
<body>
<h1>Zalogowany jako: <?php echo $username ?></h1>
<?php echo anchor('/auth/logout/', 'Wyloguj'); ?>
</body>
</html>
