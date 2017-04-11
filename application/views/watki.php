<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/css/style.css";?>"/>
</head>
<body>
<?php
foreach($categories->result() as $category)
 {
 	echo "<h1>".$category->name."</h1>";
 	foreach($allwatki->result() as $w)
 	{
	 	if($category->id==$w->categoryid)
	 	{
			echo"<table>
			<tr>
			<th>Nazwa</th>
			<th>Twórca</th>
			<th>Data Utworzenia</th>
			<th>Data ostatniego posta</th>
			<th>Wszystkich Postów</th>
			</tr>
			<tr>
			<td><a href=".base_url()."index/watki/".$w->id.">".$w->name."</a></td>
			<td>".$w->authorname."</td>
			<td>".$w->startdate."</td>
			<td>".$w->actudate."</td>
			<td>".$w->posts."</td>
			</tr>
			</table>";
	 	}
 	}
 }
?>
</body>
</html>