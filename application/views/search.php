<!DOCTYPE html>
<html lang="pl">
<head>
</head>
<body>
<div id="result">
<h2>Wyniki wyszukiwania</h2>
<?php foreach($result->result() as $w)
{
if(isset($w->authorname))
{
	echo "<a href=".base_url()."/index/userprofil/".$w->authorname.">".$w->authorname."</a></br>";
}
else if(isset($w->posts))
{
	echo "<a href=".base_url()."index.php/index/watki/".$w->id.">".$w->name."</a></br>";	
}
else if(isset($w->name))
{
	echo "<a href=".base_url()."/index/posty/".$w->id.">".$w->name."</a></br>";
}
else if(isset($w->text))
{
	echo "<a href=".base_url()."/index/posty/".$w->postyid.">".$w->text."</a></br>";
}
else
{
	echo "Coś poszło nie tak!";
}
}
?>
</div>
</body>
</html>
