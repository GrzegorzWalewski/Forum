<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>Wiadomość</title>
</head>
<body>
<h1>Odpowiedz na wiadomość</h1>
<?php
	$attributes=array('id' => 'sendform','method'=>'post');
	echo form_open('Message/send',$attributes);
	echo form_hidden('to',$to);
	echo "Tytuł wiadomości: ";
	echo form_input('title');
	echo "Treść wiadomości: ";
	echo form_textarea('tresc');
	echo form_hidden('from',$from);
	echo form_submit('submit','Wyślij');
	echo form_close();
?>

</body>
</html>