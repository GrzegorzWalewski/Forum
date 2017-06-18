<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<meta name="base_url" content="<?php echo base_url() ?>" >
<meta name="role_url" content="<?php if(isset($watek)&&!isset($wpisy)){echo "/watek/";}if(isset($posty)&&!isset($wpisy)){echo "/posty/".$id;}if(isset($wpisy)){echo "/wpisy/".$id;} ?>" >
<title>NajlepszeForum</title>
<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/css/style.css";?>"/>
<script type="text/javascript" src="<?php echo base_url()."assets/js/onLoad.js";?>"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/controller.js";?>"></script>
</head>
<body>
	 onload="<?php if(!isset($watki)&&!isset($posty)){echo "loadPrimary();  loadAll();";}?>"
<div id="search">
Wyszukaj
<?php
	$attributes=array('id' => 'search','method'=>'get');
	echo form_open('index/search',$attributes);
	echo form_input('search');
	echo "Chciałbym wyszukać: ";
	$options=array(
		'users'=>"Urzytkowników",
		'watki'=>"Wątków",
		'posts'=>"Postów",
		'wpisy'=>"Wpisów"
		);
	echo form_dropdown('category',$options);
	echo form_submit('submit','Wyszukaj');
	echo form_close();
?>
</div>
<div id="who">
</div>
<div id="userbuttons">
</div>
<table>
	<tr>
		<td><a href="<?php echo base_url()?>regulamin">Regulamin</a></td>
		<td><a href="<?php echo base_url()?>kontakt">Kontakt</a></td>
	</tr>
</table>
<div id="primary"></div>
<div id="all"></div>
<div id="newer"></div> 
<?php
	if(isset($watek))
	{
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
	}
else if(isset($wpisy))
{
	foreach($posty->result() as $w)
	{;
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
}
?>
</body>
</html>