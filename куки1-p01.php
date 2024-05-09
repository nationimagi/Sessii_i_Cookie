<?php
session_start();

//-------------- подсчет посещений страниц
if (!isset($_SESSION['count_str01'])){
	$_SESSION['count_str01'] = 1;
} else {
	++$_SESSION['count_str01'];
}

?>

<!DOCTYPE html>
<html> 

<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> Красный </title>
</head>

<body>

<form>
	
	<p align=right>
		<strong> Пользователь: <?php echo $_SESSION['logged_in_user_name']; ?>  </strong>
	</p>
	
	<p align=right>
		<strong> Сессия: <?php echo session_id(); ?>  </strong>
	</p>
	<!-- ............... -->

	<p align=center>
		Красный
	</p>
	<!-- ............... -->
</form>

<form method="post" action="куки2.php">
	<p align=center>
		<input type="text" name="phone" placeholder="88005553535">
		<input type="submit" value="Запомнить" />
	</p>
</form>

<form method="post" action="куки1-p02.php">
	
	<p align=center>
		<input type="submit" value="Перейти к следующей странице" />
	</p>
	<!-- ............... -->
	
</form>

<form method="post" action="куки1-p00.php">
	
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

