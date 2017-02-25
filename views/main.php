<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>Chat</title>
</head>
<body>
<center>
	<h1>Witam na obozowym czacie!</h1>

<?php foreach(array_reverse($messages->result()) as $message): ?>
<?php echo $message->authorname;  ?>	
<strong><?php echo $message->message; ?></strong>   
<small><?php echo $message->date; ?></small>
</br>
<?php endforeach; ?>
</center>
</body>
</html>
