<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
</head>
<body>
<div>
	<?php
		if(isset($role)&&$role=="administrator")
		{
			echo "<a href=\"/default/index.php/index/addwatek\">Dodaj watek</a>";
			echo "<a href=\"/default/index.php/index/addwpis\">Dodaj wpis</a>";
		}
		else if(isset($role)&&$role=="administrator_watkow")
		{
			echo "<a href=\"/default/index.php/index/addwatek\">Dodaj watek</a>";
			echo "<a href=\"/default/index.php/index/addwpis\">Dodaj wpis</a>";
		}
		else if(isset($role)&&$role=="administrator_postow")
		{
			echo "<a href=\"/default/index.php/index/addpost\">Dodaj post</a>";
			echo "<a href=\"/default/index.php/index/addwpis\">Dodaj wpis</a>";
		}
		else if(isset($role)&&$role=="moderator")
		{
			echo "<a href=\"/default/index.php/index/addwpis\">Dodaj wpis</a>";
		}
		if(isset($role)&&$role!=""&&isset($adress))
		{
			echo "<a href=\"/default/index.php/index/addpost\">Dodaj post</a>".$adress;
		}
	?>
</div>	
</body>
</html>
