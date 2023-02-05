<?php

include_once SITE_ROOT . "/app/database/db.php";

$commentsForAdmin = selectAll('comments');
$page = $_GET['post'];
$email = '';
$comment = '';
$errMsg = [];
$status = 0;
$comments = [];


//Код для формы создания комментария
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['goComment'])){

	$email = trim($_POST['email']);
	$comment = trim($_POST['comment']);

	if($email === '' || $comment === ''){
		array_push($errMsg, "Не все поля заполнены!");
  }elseif (mb_strlen($comment, 'UTF8') < 50){
		array_push($errMsg, "Комментарий должен быть длинее 50 символов");
  }else{
		$user = selectOne('users', ['email' => $email]);
		if($user['email'] == $email){
			$status = 1;
		}
		
		$comment = [
			 'status' => $status,
			 'page' => $page,
			 'email' => $email,
			 'comment' => $comment,
		];
		$comment = insert('comments', $comment);
		$comments = selectAll('comments', ['page' => $page, 'status' => 1 ] );
  }
}else{
	$email = '';
	$comment = '';
	$comments = selectAll('comments', ['page' => $page, 'status' => 1 ] );
}



//Удаление комментария
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
	$id = $_GET['delete_id'];
	delete('comments', $id);
	header('location: ' . BASE_URL . 'admin/comments/index.php');
}


//Опубликова или неопубликован комментарий
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['pub_id'])){
	$id = $_GET['pub_id'];
	$publish = $_GET['publish'];

	$postId = update('comments', $id, ['status' => $publish]);
	header('location: ' . BASE_URL . "admin/comments/index.php");
	exit();
}


?>