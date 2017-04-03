<!DOCTYPE html>
<html lang="pl">
<head>
</head>
<body>
<?php foreach($userinfo->result() as $w): ?>
<h1><?php echo $w->authorname; ?></h1>
<table>
<tr>
<th>Opis</th>
<th>Mail</th>
<th>Ostatnio zalogowany</th>
<th>Konto założone</th>
</tr>
<tr>
<td><?php 
$desc=$w->description;
if($desc!="")
{
	echo $desc;
}
else if($username==$w->authorname)
{
	echo "<a href=".base_url()."index/addopis/>Dodaj opis</a> już teraz";
}
else
{
	echo "Ten urzytkownik nie dodał jeszcze opisu";
}
 ?>
</td>
<td><?php echo $w->authormail; ?></td>
<td>
<?php
$datetime1 = strtotime($w->last_login);
$datetime2 = strtotime(date("Y-m-d H:i:s"));
$secs = $datetime2 - $datetime1;
$minutes=round($secs/60);
$hours=round($secs/3600);
$days =round($secs / 86400);
if($days==1)
{
	echo "1 day ago";
}
else if($days>1){
	echo $days." days ago";
}
else if($hours>=1)
{
	if($hours==1)
	{
		echo "1 hour ago";
	}
	else{
		echo $hours." hours ago";
	}
}
else if($minutes>=1)
{
	if($minutes==1)
	{
		echo "1 minute ago";
	}
	else{
		echo $minutes." minutes ago";
	}
}
else
{
	echo "Przed chwilą";
}
?>
</td>
<td><?php echo $w->created; ?></td>
<?php endforeach; ?>
</tr>
</table>
<h4>Ostatnia aktywność</h4>
<div id="watkic">
Wątki</br>
<?php
	if(!empty(array_filter($lawatki->result())))
	{
		foreach($lawatki->result() as $w)
		{
			echo "<a href=".base_url()."index.php/index/watki/".$w->id.">".$w->name."</a></br>";
		}
	}
	else
	{
		echo "Brak zawartości!";
	}
?>
</div>
<div id="postyc">
Posty</br>
<?php
	if(!empty(array_filter($laposty->result())))
	{
		foreach($laposty->result() as $w)
		{
		echo "<a href=".base_url()."/index/posty/".$w->id.">".$w->name."</a></br>";
		}
	}
	else
	{
		echo "Brak zawartości!";
	}
?>
</div>
<div id="wpisyc">
Wpisy</br>
<?php
	if(!empty(array_filter($lawpisy->result())))
	{
		foreach($lawpisy->result() as $w)
		{
		echo "<a href=".base_url()."/index/posty/".$w->postyid.">".$w->text."</a></br>";
		}
	}
	else
	{
		echo "Brak zawartości!";
	}
?>
</div>
</body>
</html>
