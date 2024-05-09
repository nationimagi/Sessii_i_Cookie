<?php
session_start();

//-------------- подсчет посещений страниц
if (!isset($_SESSION['count_str02'])){
	$_SESSION['count_str02'] = 1;
} else {
	++$_SESSION['count_str02'];
}
?>

<!DOCTYPE html>
<html> 

<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> Зеленый </title>
</head>

<body>

<form>

	<p align=right>
		<strong> <?php echo $_SESSION['logged_in_user_name']; ?>  </strong>
	</p>
	
	<p align=right>
		<strong> <?php echo session_id(); ?>  </strong>
	</p>
	<!-- ............... -->

	<p align=center>
		Зеленый
	</p>
	<!-- ............... -->
</form>

<form method="post" action="куки3.php">
	
	<p align=center>
		Когда у Вас день рождения?
	</p>
	
	<p align=center>
		(функция доступна только авторизованным пользователям)
	</p>
	
	<p align=center>
		
		<input type="text" name="birthd" placeholder="03-02">
		<input type="submit" value="Запомнить" />
	</p>
</form>

<form method="post" action="куки1-p03.php">
	
	<p align=center>
		<input type="submit" value="Перейти к следующей странице" />
	</p>
	<!-- ............... -->
	
</form>

<form method="post" action="куки1-p01.php">
	
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