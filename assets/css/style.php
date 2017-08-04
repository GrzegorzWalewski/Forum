<?php
    header("Content-type: text/css; charset: UTF-8");
    $mainc="#4ABDAC";
    $textc="#DFDCE3";
    $linkc="#f95c1d";
    $h1c="#000000";
   	$menupos="right";
?>
body {
    background-color:<?php echo $mainc; ?>;
    color:<?php echo $textc; ?>;
    font-size: 18px;
	font-family: 'Bungee';
	line-height: 25px;
	text-align: center;
}
a{
	color:<?php echo $linkc;?>;
}
h1
{
	color:<?php echo $h1c;?>;
	font-family: 'Bungee Shade';
	font-size: 26px;
}
#previewWin
{
	width:700px;
	height: 400px;
	padding: 5px;
	position: absolute;
	visibility: hidden;
	top: 10px;
	left: 10px;
	border: 1px #cc0 solid;
	clip:auto;
	overflow: hidden;
}
#previewWin h1, #previewWin h2{
	font-size: 1.0em;
}
.tabela 
{
	margin-left: auto;
	margin-right: auto;
	border-spacing: 14px 17px;
}
.naglowki
{
	color: black;
}
#newer
{
	font-size: 13px;
}
#menu_l
{
	height:12px;
	width:24px;
}
ul#menu
{
	display: none;
	list-style-type: none;
}
#right 
{
	float:<?php echo $menupos; ?>;
	width: 20%;
	height: 550px;
	position: static;
	text-align: center;
}
#madeby
{
	text-align: left;
	font-size: 10px;
	color:black;
	background-color:#f95c1d;
	width: 100%;
}