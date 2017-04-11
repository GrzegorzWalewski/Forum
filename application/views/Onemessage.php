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
			echo $w->messfrom;
			echo "</td><td>";
			echo $w->sendtime;
			echo "</tr></table>";
			echo $w->tresc." ";
			echo "<a href=".base_url()."message/replyform/".$w->messfrom.">Odpowiedz</a>";
		}
	}
else
	{
		echo"Wystąpił błąd";
	}
?>
<a href="<?php echo base_url() ?>message">Wróć</a>
</body>
</html>