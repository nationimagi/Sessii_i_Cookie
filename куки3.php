<?php
session_start();
date_default_timezone_set("Europe/Moscow");

echo date('j F Y');
?>

<!DOCTYPE html>
<html> 

<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> хехехе </title>
</head>

<body>

<form>
	
	<h1><p align=center>
		<strong> Я тебя запомнил :Ъ <strong>
	</p></h1>
	
</form>

<form method="post" action="куки1-p02.php">
	
	<p align=center>
		<input type="submit" value="Вернуться назад" />
	</p>
	<!-- ............... -->
	
</form>

<form method="post" action="куки1-p00.php">

	<p align=center>
		<input type="submit" value="Вернуться на главную" />
	</p>
	<!-- ............... -->
	
</form>

</body>

</html> 