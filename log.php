<?php 
	include("path.php"); 
	include "app/controllers/users.php";
?>

<!doctype html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My blog</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>

	<?php include("app/include/header.php"); ?>

	<!--Form start-->
	<div class="container reg-form">
		<form class="row justify-content-center" method="post" action="log.php">
			<h2>Авторизация</h2>
			<div class="mb-3 col-12 col-md-4 err">
				<p><?=$errMsg?></p>
			</div>
			<div class="w-100"></div>
			<div class="mb-3 col-12 col-md-4">
				<label for="formGroupExampleInput" class="form-label">Ваша почта (при регистрации)</label>
				<input name="mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ваш email...">
			 </div>
			<div class="w-100"></div>
			<div class="mb-3 col-12 col-md-4">
			  <label for="exampleInputPassword1" class="form-label">Пароль</label>
			  <input name="password" type="password" class="form-control" id="exampleInputPassword1">
			</div>
			 <div class="w-100"></div>
			 <div class="mb-3 col-12 col-md-4">
            <button type="submit" name="button-log" class="btn btn-secondary">Войти</button>
            <a href="reg.php">Зарегистрироваться</a>
        </div>
		 </form>
	</div>
	<!--Form end-->

	<?php include("app/include/footer.php"); ?>

	<script src="https://kit.fontawesome.com/47a997ec54.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>
</body>

</html>