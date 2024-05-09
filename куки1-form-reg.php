<?php
session_start();

?>

<!DOCTYPE html>
<html> 

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 

 <title> Авторизация </title> 
 
</head>
 
<body bgcolor="#B0C4DE">

<form name="data" method="post" action="куки1-p00-reg.php">

	<h1 align=center> 
		<font size=6 style=color:#4B0082>  
		Авторизация 
		</font>
	</h1> 

	<p align=center> <input type="text" name="namereg" placeholder="login" 
	   size='22' maxlength='20'> </p>

	<p align=center> <input type="password" name="pass" placeholder="password" 
	   size='22' maxlength='20'> </p>

	<p align=center> <input type="text" name="mail" placeholder="email@mail.ru" value="email@mail.ru" 
	   size='22' maxlength='30'> </p>
	<!-- ............... -->
	
	<p align=center> 
		<input type="submit" value="Войти" onclick="calculate( );"> 
	</p>

</form>

</body>

</html> 



<script language="JavaScript">

function calculate( ) {

	var s_n = document.data.namereg.value;
	var s_p = document.data.pass.value;
	var s_m = document.data.mail.value;
	
	//
	s_m = s_m.toLowerCase();
	
	var s_err = "";
	let c_err = 0;
	var s_alert = "";
	
	//--------------------- ПУСТЫЕ ПОЛЯ
	if ((s_n.length == 0) ||
		(s_p.length == 0) ||
		(s_m.length == 0)) {
			c_err = -1;
	}
	
	if (c_err != -1) { //большой иф
	
	//--------------------- ПОЛЕ 3 ПОЧТА
	
	var alph_m1 = 'qwertyuiopasdfghjklzxcvbnm1234567890';
	var alph_m23 = 'qwertyuiopasdfghjklzxcvbnm';
	
	var m1 = s_m.split('@');
	var m23 = "";
	
	if (m1.length == 2) {
		m23 = m1[1].split('.');
	}
	
	//alert(alph_m1);
	//alert(m1.length);
	
	switch (true){	
		//-------------------       проверка корректности формата почты
		case m1.length != 2:
		case m23.length != 2:
			c_err++;
			s_err=s_err+c_err+". Проверьте корректность ввода данных в 3 поле. \nДанные должны быть в формате email@mail.ru\n";
		break;
		
		//-------------------       проверка доменной зоны на количество символов
		case m23[1].length < 2:
		case m23[1].length > 6:
			c_err++;
			s_err=s_err+c_err+". Поле 3: длина доменной зоны должна быть от 2 до 6. \n";
		break;
		
		//-------------------       проверка имени пользователя
		case m1.length == 2:
		
			c_a_f = 0; //счетчик
			
			var m_name = m1[0];
	
			for (let i=0; i<m_name.length; i++){
				for (let j=0; j<alph_m1.length; j++){
					if (m_name[i] == alph_m1[j]) c_a_f++;
				}
			}
			
			if (m_name.length != c_a_f) {
				c_err++;
				s_err=s_err+c_err+". Поле 3: в имени пользователя могут быть только цифры и латинские буквы. \n";
			}
			
		//-------------------       проверка домена 
		case m23.length == 2:
		
			//-------------------       проверка имени сервера
			c_a_f = 0; //счетчик
			
			var m_d1 = m23[0];
	
			for (let i=0; i<m_d1.length; i++){
				for (let j=0; j<alph_m23.length; j++){
					if (m_d1[i] == alph_m23[j]) c_a_f++;
				}
			}
			
			if (m_d1.length != c_a_f) {
				c_err++;
				s_err=s_err+c_err+". Поле 3: в имени сервера могут быть только латинские буквы. \n";
			}
			
			//-------------------       проверка доменной зоны
			c_a_f = 0; //счетчик
			
			var m_d2 = m23[1];
			
			for (let i=0; i<m_d2.length; i++){
				for (let j=0; j<alph_m23.length; j++){
					if (m_d2[i] == alph_m23[j]) c_a_f++;
				}
			}
			
			if (m_d2.length != c_a_f) {
				c_err++;
				s_err=s_err+c_err+". Поле 3: в доменной зоне почты могут быть только латинские буквы. \n";
			}
		
	} //конец switch2 
	
	} //конец большого ифа
	
	//--------------------- вывод ошибки или все хорошо
	//alert(c_err);
	
	s_alert = "!Обнаружено " + c_err + " ошибок!\n" + s_err;
	
	switch (c_err){
	
		case -1:
			alert("Пожалуйста, заполните все поля. ");
		break;
		
		case 0: 
			alert("Все супер!");
			
			window.location.href = 'куки1-p00-reg.php'; //
				 
		break;
		
		default:
			alert(s_alert);
			
	}

} //конец функции

</script>
