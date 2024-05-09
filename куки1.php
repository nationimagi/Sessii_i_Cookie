<?php
//session_id("$ses"); //ид сессии
session_start();

//-------------- сброс cookie
$value = $_SESSION['logged_in_user_name'];
setcookie("id_".$value."_user", "");

//-------------- сброс переменных сессии
unset($_SESSION['logged_in_user_name']);
unset($_SESSION['count_str00']);
unset($_SESSION['count_str01']);
unset($_SESSION['count_str02']);
unset($_SESSION['count_str03']);
unset($_SESSION['time']);

?>

<!DOCTYPE html>
<html> 

<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> Добро пожаловать </title>
</head>

<body>

<form method="post" action="куки1-p00.php">

<!-- comment -->

	<p align=center> 
		<input type="text" name="namae" placeholder="путешественник">
	
		<input type="submit" name="reg1" value="Войти как гость" />
	</p>
	<!-- ............... -->
	
</form>

<form method="post" action="куки1-form-reg.php">
	
	<p align=center>	
		<input type="submit" name="reg2" value="Я уже смешарик" />
	</p>
	
</form>

</body>

</html> 

