<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>Joke list</title>
</head>
<body>
<p><a href="?add">Dodaj nowy zart</a></p>
<center><p>Wszystkie zarty w bazie danych:</p>
<blockquote>
<?php foreach($jokes->result() as $joke): ?>
<form action="" method="POST">
<?php echo $joke->joketext;?>
<p>OCENA:<?php echo $joke->rate; ?></p>
<input type="hidden" name="id" id="id" value="<?php echo $joke->id;?>">
<input type="submit" name="rate" id="+" value="+">
<input type="submit" name="rate" id="-" value="-">
</br>Autor:<a href="mailto:<?php echo $joke->authormail;?>">
<?php echo $joke->authorname;?></a>
</form>
</br>
</br>
<?php endforeach; ?>
</blockquote>
</center>
</body>
</html>
