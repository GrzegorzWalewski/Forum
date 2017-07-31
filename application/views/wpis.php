<?php
foreach($posty->result() as $w)
{
	echo "<table>
	<tr>
	<th>Nazwa posta </th>
	<th>Autor posta </th>
	<th>Treść posta </th>
	</tr>
	<tr>
	<td>".$w->name."</td>
	<td>".$w->authorname."</td>
	<td>".$w->tresc."</td>
	</tr>
	</table>";
}
foreach($wpisy->result() as $w)
{
	echo "Autor: ".$w->authorname;
	echo "Data dodania: ".$w->addtime."</br>";
	echo "Treść: ".$w->text."</br>";
	if($w->authorname==$username)
	{
		$attributes=array('id' => 'editform','method'=>'post');
			echo form_open('edit/wpisform',$attributes);
			echo form_hidden('id',$w->id);
			echo form_hidden('reid',$id);
			echo form_hidden('text',$w->text);
			echo form_submit('submit','Edytuj');
			echo form_close();
	}
	if(isset($role)&&$role=="administrator"||isset($role)&&$role=="administrator_wpisow")
	{
		$attributes=array('id' => 'delform','method'=>'post');
		echo form_open('del/wpis',$attributes);
		echo form_hidden('id',$w->id);
		echo form_hidden('reid',$id);
		echo form_submit('submit','Usuń wpis');
		echo form_close();
	}
}
foreach($posty->result() as $w)
{
	echo "<a href=".base_url()."index/watki/$w->watkiid/>Wróć</a></td>";
}
?>