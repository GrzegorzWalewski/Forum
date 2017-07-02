<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<script type="text/javascript" src="<?php echo base_url()."assets/js/onLoad.js";?>"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/menu.js";?>"></script>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/css/style.css";?>"/>
</head>
<body>
Zalogowany jako:</br>
<div>
	<a href="#"><?php echo $username ?></a>
</div>
<div>
<div id="menu_div">
	<a href="#" id="menu_link"><img id="menu_l" src="<?php echo base_url()."assets/css/slide_menu.jpg";?>"></a>
</br>
	<ul id="menu">
	  	<li><a href="<?php echo base_url()?>index/userprofil/">Profil</a></li>
	    <li><a href="<?php echo base_url()?>message">Wiadomości</a></li>
	    <li><?php echo anchor('/auth/logout/', 'Wyloguj'); ?></li>
  	</ul>
</div>
</div>
</body>
</html>
