<!DOCTYPE html>
<html lang="pl">
<head>
</head>
<body>
	<a href="<?php echo base_url() ?>message/sendform">Nowa</a>
Odebrane:
<?php
if(!empty(array_filter($messages->result())))
	{
		foreach($messages->result() as $w)
		{
			echo "<table>
				<tr>
				<th>Tytuł</th>
				<th>Od</th>
				<th>Data wysłania</th>
				</tr>";
			echo"<tr><td>";
			echo "<a href=".base_url()."message/gettresc/".$w->id.">".$w->title."</a>";
			echo"</td><td>";
			if($w->view=="0")
			{
				echo "<b>".$w->messfrom."</b>";
			}
			echo $w->messfrom;
			echo"</td><td>";
			echo $w->sendtime;
			echo "<a href=".base_url()."message/delete/".$w->id.">Usuń</a>";
			echo "</br>";
		}
		echo"</tr></table>";
	}
else
	{
		echo"Brak zawartości";
	}
	?>
<a href="<?php echo base_url()?>">Wróć</a>
</table>
</body>
</html>