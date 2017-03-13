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
<?php foreach($categories as $category):?>
<div><label for="category<?php echo $category['id'] ?>"><input type="checkbox" name="categories[]"
id="category<?php echo $category['id'] ?>"value="<?php echo $category['id'] ?>"><?php echo htmlspecialchars($category['name'],ENT_QUOTES, 'UTF-8'); ?></label>
</div>
<?php endforeach; ?>
</fieldset>
<input type="hidden" name="name" value="<?php echo $_SESSION['email'];?>">
<div>
<input type="submit" value="Dodaj">
</div>
</form>
</body>

