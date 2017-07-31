<?php
	foreach($watek->result() as $w)
	{
		echo "<table>
		<tr>
		<th>Nazwa wątku </th>
		<th>Autor wątku </th>
		</tr>
		<tr>
		<td>".$w->name."</td>
		<td>".$w->authorname."</td>
		</tr>
		</table>";
	}
	foreach($posty->result() as $w)
	{ 
		echo "<table>
		<tr>
		<th>Nazwa posta </th>
		<th>Tresc: </th>
		<th>Autor posta </th>
		<th>Data ostatniej aktualizacji</th>
		<th>Odpowiedzi </th>
		<th>Wyświetleń </th>
		</tr>
		<tr>
		<td><a href=".base_url()."index/posty/".$w->id.">".$w->name."</a></td>
		<td>".$w->tresc."...</td>
		<td>".$w->authorname."</td>
		<td>".$w->actudate."</td>
		<td>".$w->odp."</td>
		<td>".$w->wys."</td>
		</tr>
		</table>";
		if(isset($role)&&$role=="administrator"||isset($role)&&$role=="administrator_postow")
		{
			$attributes=array('id' => 'delform','method'=>'post');
			echo form_open('del/post',$attributes);
			echo form_hidden('id',$w->id);
			echo form_hidden('reid',$id);
			echo form_submit('submit','Usuń posta');	
			echo form_close();
			$attributes=array('id' => 'editform','method'=>'post');
			echo form_open('edit/postform',$attributes);
			echo form_hidden('id',$w->id);
			echo form_hidden('reid',$id);
			echo form_hidden('name',$w->name);
			echo form_submit('submit','Edytuj posta');
			echo form_close();
		}	
	}
	echo "<a href=".base_url().">Wróć</a></td>";
?>