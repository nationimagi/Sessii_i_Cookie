<?php
session_start();
//-------------- новый пользователь
if (!isset($_SESSION['logged_in_user_name'])){ //если сессии не существует

	$_SESSION['logged_in_user_name'] = $_POST["namae"]; //присвоить введенное пользователем имя

	if (!isset($_SESSION['count_str00'])){
		$_SESSION['count_str00'] = 1;
	}

} else {
	//-------------- подсчет посещений страниц
	if (!isset($_SESSION['count_str00'])){
		$_SESSION['count_str00'] = 1;
	} else {
		++$_SESSION['count_str00'];
	}		
	
}

?>

<!DOCTYPE html>
<html> 

<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> Добро пожаловать </title>
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
	
</form>

<form method="post" action="куки1-p01.php">

<!-- comment -->

	<p align=center>
		Добро пожаловать на сайт, <?php echo $_SESSION['logged_in_user_name'] ?>!
	</p>
	<!-- ............... -->
	
	<p align=center>
		<input type="submit" value="Перейти к следующей странице" />
	</p>
	<!-- ............... -->
	
</form>

<form method="post" action="куки1.php">
	<p align=center>
		<input type="submit" value="Новый путешественник" />
	</p>
</form>

</body>

</html> 

