<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
</head>
<body>
<div>
	<?php
		if(isset($role)&&$role!=""&&isset($adress)&&$adress=="watek")
		{
			echo "<a href=\"/default/add/postform/".$id."\">Dodaj post</a>";
		}
		else if(isset($role)&&$role!=""&&isset($adress)&&$adress=="wpisy")
		{
			echo "<a href=\"/default/add/wpisform/".$id."\">Dodaj wpis</a>";
		}
		else if(isset($role)&&$role=="administrator"||$role=="administrator_watkow")
		{
			echo "<a href=\"/default/add/watekform\">Dodaj watek".$adress."</a>";
		}
		if(isset($role)&&$role!=""&&$role=="root")
		{
			echo "<a href=\"/default/root/main/\">Przejdź do panelu administratora</a>";
		}
	?>
</div>	
</body>
</html>
