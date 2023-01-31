<?php 
	session_start();
	include "../../path.php";
?>

<!doctype html>
<html lang="en">

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
	<link rel="stylesheet" href="../../assets/css/admin.css">
</head>

<body>

	<?php include("../../app/include/header-admin.php"); ?>

	<div class="container">
		<div class="row">
			<div class="sidebar col-3">
				<ul>
					<li>
						<a href="#">Записи</a>
					</li>
					<li>
						<a href="#">Пользователи</a>
					</li>
					<li>
						<a href="#">Категории</a>
					</li>
				</ul>
			</div>

			<div class="posts col-9">
				<div class="button row">
					<a href="create.html" class="col-3 btn btn-success">Создать</a>
					<span class="col-1"></span>
					<a href="index.html" class="col-3 btn btn-warning">Управление</a>
				</div>
				<div class="row title-table">
					<h2>Создание пользователя</h2>
				</div>
				<div class="row add-post">
					<form action="create.php" method="post">
					<div class="col">
						<label for="formGroupExampleInput" class="form-label">Ваш логин</label>
						<input name="login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин...">
					</div>
					<div class="col">
						<label for="exampleInputEmail1" class="form-label">Email</label>
						<input name="mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ваш email...">
					</div>
					<div class="col">
						<label for="exampleInputPassword1" class="form-label">Пароль</label>
						<input name="pass-first" type="password" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="col">
						<label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
						<input name="pass-second" type="password" class="form-control" id="exampleInputPassword2">
					</div>
					<select class="form-select" aria-label="Default select example">
						<option selected>User</option>
						<option value="1">Admin</option>

					</select>
						<div class="col">
							<button class="btn btn-primary" type="submit">Создать</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include("../../app/include/footer.php"); ?>

	<script src="https://kit.fontawesome.com/47a997ec54.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
	</script>
</body>

</html>