<?php

/*Подключаемся к базе */
require_once 'connect.php';


function tt($value){
	echo '<pre>';
	print_r($value);
	echo '</pre>';
}


//Проверка выполнения запроса к базе данных
function dbCheckError($query){

	$errInfo = $query->errorInfo();
	if($errInfo[0] !== PDO::ERR_NONE){
		echo $errInfo[2];
		exit();
	}
	return true;
}


/*Запрос на получение данных из одной таблицы*/
function selectAll($table, $params = []){
	global $pdo;   //Глобальная переменная
	$sql = "SELECT * FROM $table"; //Запрос с именнем таблицы
	
   if(!empty($params)){
       $i = 0;
       foreach ($params as $key => $value){
           if (!is_numeric($value)){
               $value = "'".$value."'";
           }
           if ($i === 0){
               $sql = $sql . " WHERE $key=$value";
           }else{
               $sql = $sql . " AND $key=$value";
           }
           $i++;
       }
   }

	$query = $pdo->prepare($sql);  //Подготавливаем запрос
	$query->execute();  //Запрос
	dbCheckError($query);  //Проверка на ошибки
	return $query->fetchAll();  //Возвращаем массив данных из этого запроса (несколько массивов с данными)
}


/*Запрос на получение данных одной строки из выбранной таблицы*/
function selectOne($table, $params = []){
	global $pdo;   //Глобальная переменная
	$sql = "SELECT * FROM $table"; //Запрос с именнем таблицы
	
   if(!empty($params)){
       $i = 0;
       foreach ($params as $key => $value){
           if (!is_numeric($value)){
               $value = "'".$value."'";
           }
           if ($i === 0){
               $sql = $sql . " WHERE $key=$value";
           }else{
               $sql = $sql . " AND $key=$value";
           }
           $i++;
       }
   }

	$sql = $sql . " LIMIT 1";
	$query = $pdo->prepare($sql);  //Подготавливаем запрос
	$query->execute();  //Запрос
	dbCheckError($query);  //Проверка на ошибки
	return $query->fetch();  //Возвращаем массив данных из этого запроса (один массив с данными)
}


//tt(selectAll('users', $params));
//tt(selectOne('users'));