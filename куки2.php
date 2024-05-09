<?php
session_start();

$phone = $_POST["phone"];
	
$_SESSION['phone'] = $phone;
	
//-------------- подсчет посещений страниц
if (!isset($_SESSION['count_str2'])){
	$_SESSION['count_str2'] = 1;
	

} else {
	++$_SESSION['count_str2'];
}	

?>

<!DOCTYPE html>
<html> 

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 

 <title> Телефон </title> 
 
</head>
 
<body>

<form>

	<p align=center>
		<input type="text" placeholder="Имя"> 
	</p>

	<p align=center> 
		<input type="text" placeholder="Фамилия"> </p>

	<p align=center> 
		<input type="text" placeholder="Телефон" value="<?php echo $_SESSION['phone']?>"> 
	</p>

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