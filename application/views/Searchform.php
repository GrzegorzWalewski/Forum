<!DOCTYPE html>
<html lang="pl">
<head>
</head>
<body>
<div id="search">
Wyszukaj
<<?php
	$attributes=array('id' => 'search','method'=>'get');
	echo form_open('index/search',$attributes);
	echo form_input('search'if(isset($search)){echo $search;});
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
</body>
</html>
