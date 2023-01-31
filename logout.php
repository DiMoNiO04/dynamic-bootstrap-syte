<?php

	session_start();
	include("path.php"); 
	
	//Удаляем сессию
	unset($_SESSION['id']);
	unset($_SESSION['login']);
	unset($_SESSION['admin']);

	//Возвращаем на главнуб страницу
	header('location: ' . BASE_URL);
?>