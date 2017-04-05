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
if(!empty(array_filter($message->result())))
	{
		foreach($message->result() as $w)
		{
			echo "<tr><td>";
			echo $w->title;
			echo "</td><td>";
			echo "<a href=".base_url()."message/sendform/".$w->messfrom.">".$w->messfrom."</a>";
			echo "</td><td>";
			echo $w->sendtime;
			echo "</tr></table>";
			echo $w->tresc;
		}
	}
else
	{
		echo"Wystąpił błąd";
	}
?>
</body>
</html>