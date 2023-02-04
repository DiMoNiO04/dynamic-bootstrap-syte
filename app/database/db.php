<?php

//Подключение сессии
session_start();

/*Подключаемся к базе */
require_once 'connect.php';

function tt($value){
	echo '<pre>';
	print_r($value);
	echo '</pre>';
	exit();
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


//Запись в таблицу БД
function insert($table, $params){
	global $pdo;
	$i = 0;
	$coll = '';
	$mask = '';
	foreach ($params as $key => $value) {
		 if ($i === 0){
			  $coll = $coll . "$key";
			  $mask = $mask . "'" ."$value" . "'";
		 }else {
			  $coll = $coll . ", $key";
			  $mask = $mask . ", '" . "$value" . "'";
		 }
		 $i++;
	}

	$sql = "INSERT INTO $table ($coll) VALUES ($mask)";

	$query = $pdo->prepare($sql);
	$query->execute($params);
	dbCheckError($query);
	return $pdo->lastInsertId();
}


//Обновление строки в таблице
function update($table, $id, $params){
	global $pdo;   //Глобальная переменная

	$i = 0;
	$str = '';
	foreach ($params as $key => $value){
		if($i === 0){
			$str = $str . $key . " = '" . $value . "'";
		}else{
			$str = $str . ", " . $key .  "= '" . $value . "'";
		}
		$i++;
	}

	$sql = "UPDATE $table SET $str WHERE id = $id"; //Запрос с именнем таблицы
	$query = $pdo->prepare($sql);
	$query->execute($params);
	dbCheckError($query);
}


//Удаление строки в таблице
function delete($table, $id){
	global $pdo;   //Глобальная переменная
	$sql = "DELETE FROM $table WHERE id = $id"; //Запрос с именнем таблицы
	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckError($query);
}


//Выборка постов с автором в админку
function selectAllFromPostsWithUsers($table1, $table2){
	global $pdo;

	$sql = "
		SELECT 
			t1.id, t1.title, t1.img, t1.content, t1.status, t1.id_topic, t1.created_date, t2.username	
		FROM $table1 AS t1 JOIN $table2 AS t2 ON t1.id_user = t2.id
	";

	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckError($query);
	return $query->fetchAll();
}


//Выборка постов с автором на главную 
function selectAllFromPostsWithUsersOnIndex($table1, $table2, $limit, $offset){
	global $pdo;
	$sql = "SELECT p.*, u.username FROM $table1 AS p JOIN $table2 AS u ON p.id_user = u.id WHERE p.status=1 LIMIT $limit OFFSET $offset";
	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckError($query);
	return $query->fetchAll();
}


//Выборка постов в слайдшоу на главную
function selectTopTopicsFromPostsOnIndex($table){
	global $pdo;
	$sql = "SELECT * FROM $table WHERE id_topic=7; ";
	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckError($query);
	return $query->fetchAll();
}

//Поиск по заголовкам и содержимому (простой)
function searchInTitleAndContent($text, $table1, $table2){
	$text = trim(strip_tags(stripcslashes((htmlspecialchars($text)))));
	global $pdo;
	$sql = "
		SELECT
		p.*, u.username 
		FROM $table1 AS p 
		JOIN $table2 AS u 
		ON p.id_user = u.id 
		WHERE p.status=1
		AND p.title LIKE '%$text%' OR p.content LIKE '%$text%'
 	";
	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckError($query);
	return $query->fetchAll();
}


//Выборка поста с автором для сингл 
function selectPostFromPostsWithUsersOnSingle($table1, $table2, $id){
	global $pdo;
	$sql = "SELECT p.*, u.username FROM $table1 AS p JOIN $table2 AS u ON p.id_user = u.id WHERE p.id=$id";
	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckError($query);
	return $query->fetch();
}


//Выборка поста с автором для сингл 
function countRow($table){
	global $pdo;
	$sql = "SELECT COUNT(*) FROM $table WHERE status = 1";
	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckError($query);
	return $query->fetchColumn();
}
