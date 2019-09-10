<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт ihahn</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
	include "menu.php"
?>
	<h1>Личный сайт ihahn</h1>
	<img src="img/photo.png">

</p>
<b>Добрый день, меня зовут Максим!</b> 
<p>Я совсем недавно начал программировать и уже написал свой первый сайт.</p>
<p><i>Мой <a href=https://github.com/rainstr7> GitHub</a></i></p>
<p>На этом сайте вы сможете cыграть в игры:<br>
<a href="puzzle.php">Загадки</a>
<a href="guess.php">Угадайка</a></p>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> ihahn
</div>

</body>
</html>