<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
</head>
<body>
<?php
foreach($categories->result() as $category)
 {
 	echo "<h1>".$category->name."</h1>";
 	echo"<table class=\"tabela\">
			<tr class=\"naglowki\">
			<th>Nazwa</th>
			<th>Twórca</th>
			<th>Data Utworzenia</th>
			<th>Data ostatniego posta</th>
			<th>Wszystkich Postów</th>
			</tr>";
 	foreach($allwatki->result() as $w)
 	{
	 	if($category->id==$w->categoryid)
	 	{
			echo"
			<tr>
			<td><a href=".base_url()."index/watki/".$w->id.">".$w->name."</a></td>
			<td>".$w->authorname."</td>
			<td>".$w->startdate."</td>
			<td>".$w->actudate."</td>
			<td>".$w->posts."</td>
			</tr>";
			
	 	}
 	}
 	echo "</table>";
 }
?>
</body>
</html>