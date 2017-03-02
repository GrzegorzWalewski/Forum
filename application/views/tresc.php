<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
</head>
<body>
<h1>Najważniejsze watki</h1>
<table>
	<?php foreach($wazne->result() as $w): ?>
<tr>
<th>Nazwa</th>
<th>Twórca</th>
<th>Data Utworzenia</th>
<th>Data ostatniego posta</th>
<th>Wszystkich Postów</th>
</tr>
<tr>
<td><a href=/default/index.php/index/watki/<?php echo $w->id;?>><?php echo $w->name;?></a></td>
<td><?php echo $w->authorname; ?></td>
<td><?php echo $w->startdate; ?></td>
<td><?php echo $w->actudate; ?></td>
<td><?php echo $w->posts; ?></td>
<?php endforeach; ?>
</tr>
</table>
</body>
</html>
