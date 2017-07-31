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
<script type="text/javascript" src="<?php echo base_url()."assets/js/menu.js";?>"></script>
</head>
<body>
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
	<div id="watek"></div>
	<?php
	$base_url=base_url();
	if(isset($watek))
	{
	$this->load->view('watek');
	}
	if(isset($wpisy))
	{
		$this->load->view('wpis');
	}
	?>
</body>
</html>