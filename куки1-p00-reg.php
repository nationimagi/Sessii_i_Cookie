<?php
session_start();
date_default_timezone_set("Europe/Moscow");

$s_n = $_POST["namereg"];
		
//-------------- новый пользователь
if (!isset($_SESSION['logged_in_user_name'])){ //если сессии не существует

	$_SESSION['logged_in_user_name'] = $_POST["namereg"]; //присвоить введенное пользователем имя

	if (!isset($_SESSION['count_str00'])){
		$_SESSION['count_str00'] = 1;
	}
	
	$ses = 1; //session_id();
	
} else {
	//-------------- подсчет посещений страниц
	if (!isset($_SESSION['count_str00'])){
		$_SESSION['count_str00'] = 1;
	} else {
		++$_SESSION['count_str00'];
	}		
	
	$ses = 0; //session_id();
}

//-------------- time time time
if(!isset($_SESSION['time'])){
	$_SESSION['time'] = time();
}

//-------------- DB
if ($ses ==1) { //проверка в одной ли мы сессии
$ee = "user_".$s_n.".txt";
$e = fopen($ee,"a+"); 
	
		$c_enters = file_get_contents($ee); //копируем содержимое файла в строчку
		
		$c_enters++; //счетчик заходов на сайт
		file_put_contents($ee, null); //очистка содержимого
		
		fwrite($e, $c_enters);
	
fclose($e);  //------------------- файл посетители.txt закрыт

//-------------- DB последний заход вывод
$tt = "user_".$s_n."_date.txt";
$t = fopen($tt,"a+"); 
	
	if (filesize($tt) == null) { //если в файле ничего нет
		fwrite($t, "0");
	}
  
	while(!feof($t)){ 
		echo "<p align=center> Вы не были на моем сайте с ".fgets($t)."</p>"; 
	}
	
fclose($t);  //------------------- файл время.txt закрыт

//-------------- DB последний заход update
$tt = "user_".$s_n."_date.txt";
$t = fopen($tt,"w+"); 
	
	$tim = date('j F Y');
		
	fwrite($t, $tim);
	
fclose($t);  //------------------- файл время.txt закрыт

}

?>

<?php
//-------------- cookie
$value = $_SESSION['logged_in_user_name'];

setcookie("id_".$value."_user", $value, time()+3600);  /* срок действия 1 час */

?>

<!DOCTYPE html>
<html> 

<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> Добро пожаловать </title>
</head>

<body>

<form>

	<p align=center>
		Вы посетили наш сайт 
		<?php  
		$ee = "user_".$s_n.".txt";
		$e = fopen($ee,"r"); 
		
		if (filesize($ee) == null) { //если в файле ничего нет
			echo "0";
		}
  
		while(!feof($e)){ 
			echo fgets($e); 
		}

		fclose($e);
		?> раз!
	</p>
	
	<p align=center>
		Последний вход: <?php echo time() - $_SESSION['time']; ?> секунд назад 
	</p>

</form>


<form method="post" action="куки1.php"> 

	<p align=right>
		<strong> Пользователь: <?php echo $_SESSION['logged_in_user_name']; ?>  </strong>
	</p>
	
	<p align=right>
		<strong> Сессия: <?php echo session_id(); ?>  </strong>
	</p>
	<!-- ............... -->

	<p align=right>
		<input type="submit" value="Выйти" />
	</p>
	
</form>

<form>

<!-- comment -->
	
	<p align=center>
		Добро пожаловать на сайт, <?php echo $_SESSION['logged_in_user_name'] ?>!
	</p>
	<!-- ............... -->
</form>

<form method="post" action="куки1-p01.php">
	<p align=center>
		<input type="submit" value="Перейти к следующей странице" />
	</p>
	<!-- ............... -->
	
</form>

</body>

</html> 

<script language="JavaScript">
	alert(document.cookie); // показываем все куки
</script>