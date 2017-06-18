<h1>Najważniejsze watki</h1>
<table class="tabela">
	<?php foreach($wazne->result() as $w): ?>
<tr class="naglowki">
<th>Nazwa</th>
<th>Twórca</th>
<th>Data Utworzenia</th>
<th>Data ostatniego posta</th>
<th>Wszystkich Postów</th>
</tr>
<tr>
<td><a href=<?php echo base_url()."index/watki/".$w->id;?>><?php echo $w->name;?></a></td>
<td><?php echo $w->authorname; ?></td>
<td><?php echo $w->startdate; ?></td>
<td><?php echo $w->actudate; ?></td>
<td><?php echo $w->posts; ?></td>
<?php endforeach; ?>
</tr>
</table>