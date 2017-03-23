<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
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
	?>
</div>	
</body>
</html>
