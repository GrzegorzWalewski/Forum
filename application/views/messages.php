<!DOCTYPE html>
<html lang="pl">
<head>
</head>
<body>
	Wiadomości:
<table>
<tr>
<th>Tytuł</th>
<th>Od</th>
<th>Data wysłania</th>
</tr>
<?php
if(!empty(array_filter($messages->result())))
	{
		foreach($messages->result() as $w)
		{
			echo"<tr><td>";
			echo "<a href=".base_url()."message/gettresc/".$w->id.">".$w->title."</a>";
			echo"</td><td>";
			echo $w->messfrom;
			echo"</td><td>";
			echo $w->sendtime;
			echo"</tr></table>";
		}
	}
else
	{
		echo"Brak zawartości";
	}
?>
</table>
</body>
</html>