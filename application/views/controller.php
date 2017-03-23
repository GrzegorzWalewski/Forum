<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>NajlepszeForum</title>
<script type="text/javascript">
function loadDoc()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("who").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET","/default/index/who",true);
	xhttp.send();
	setTimeout("loadDoc()",1000);
}
function loadPrimary()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("primary").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET","/default/index/primary",true);
	xhttp.send();
}
function loadNewer()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("newer").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET","/default/index/newer",true);
	xhttp.send();
	setTimeout("loadNewer()",1000);
}
function loadRole()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("userbuttons").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET","/default/index/userrole<?php if(isset($watek)&&!isset($wpisy)){echo "/watek/";}if(isset($posty)&&!isset($wpisy)){echo "/posty/".$id;}if(isset($wpisy)){echo "/wpisy/".$id;} ?>",true);
	xhttp.send();
	setTimeout("loadRole()",1000);
}
</script>
</head>
<body onload="loadDoc(); loadRole(); <?php if(!isset($watki)&&!isset($posty)){echo "loadPrimary();";}?> loadNewer();">
<div id="who">
</div>
<table>
	<tr>
		<td><a href="forum/regulamin">Regulamin</a></td>
		<td><a href="forum/regulamin">Najnowsze</a></td>
		<td><a href="forum/regulamin">Kontakt</a></td>
	</tr>
</table>
<div id="userbuttons">
</div>
<div id="primary"></div>
<div id="newer">
</div>
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
			<th>Autor posta </th>
			<th>Data ostatniej aktualizacji</th>
		 	<th>Odpowiedzi </th>
		   	<th>Wyświetleń </th>
		   	</tr>
		  	<tr>
		   	<td><a href=/default/index/posty/".$w->id.">".$w->name."</a></td>
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
					echo form_submit('submit','Usuń posta');
					echo form_close();
					$attributes=array('id' => 'editform','method'=>'post');
					echo form_open('edit/postform',$attributes);
					echo form_hidden('id',$w->id);
					echo form_hidden('name',$w->name);
					echo form_submit('submit','Edytuj posta');
					echo form_close();
				}	
			

		}
	}
else if(isset($wpisy))
{
	foreach($posty->result() as $w)
	{
		 echo "<table>
			<tr>
			<th>Nazwa posta </th>
			<th>Autor posta </th>
			</tr>
			<tr>
			<td>".$w->name."</td>
			<td>".$w->authorname."</td>
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
					echo form_hidden('text',$w->text);
					echo form_submit('submit','Edytuj');
					echo form_close();
		}
	}
}
?>
</body>
</html>