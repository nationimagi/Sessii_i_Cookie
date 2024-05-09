<?php
session_start();

//-------------- подсчет посещений страниц
if (!isset($_SESSION['count_str03'])){
	$_SESSION['count_str03'] = 1;
} else {
	++$_SESSION['count_str03'];
}
?>

<!DOCTYPE html>
<html> 

<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> Синий </title>
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
		Синий
	</p>
	<!-- ............... -->
	
</form>

<form>

	<p align=center>
		Посещенные страниц: <br>
	</p>
	
	<p align=center>
		Главная страница - <?php echo $_SESSION['count_str00']; ?> раз
	</p>
	
	<p align=center>
		Красный - <?php echo $_SESSION['count_str01']; ?> раз
	</p>
	
	<p align=center>
		Зеленый - <?php echo $_SESSION['count_str02']; ?> раз
	</p>
	
	<p align=center>
		Синий - <?php echo $_SESSION['count_str03']; ?> раз
	</p>
	<!-- ............... -->
	
</form>

<form method="post" action="куки1-p00.php">

	<p align=center>
		<input type="submit" value="Вернуться на главную" />
	</p>
	<!-- ............... -->
	
</form>

<form method="post" action="куки1-p02.php">
	
	<p align=center>
		<input type="submit" value="Вернуться назад" />
	</p>
	<!-- ............... -->
	
</form>



</body>

</html> 