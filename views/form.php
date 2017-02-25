<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>Dodawanie dowcipu</title>
</head>
<body>
<h1>Dodaj dowcip</h1>
<form action="?addform" method="POST">
<div>
<label for="text">Wpisz dowcip:</label>
<input type="text" name="joketext" id="joketext" value=""></input>
</div>
<fieldset>
<legend>Kategorie</legend>
</fieldset>
<input type="hidden" name="name" value="<?php echo $_SESSION['email'];?>">
<div>
<input type="submit" value="Dodaj">
</div>

</form>

</body>
</html>