<?php 
   include "../../path.php";
   include "../../app/controllers/users.php";
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
		<?php include "../../app/include/sidebar-admin.php";?>

			<div class="posts col-9">
				<div class="row title-table">
					<h2>Редактирование пользователя</h2>
				</div>
				<div class="row add-post">
					<div class="mb-12 col-12 col-md-12 err">
						<?php include("../../app/helps/errorInfo.php"); ?>
					</div>
					<form action="edit.php" method="post">
						<input name="id" value="<?=$id?>" type="hidden">
						<div class="col">
							<label for="formGroupExampleInput" class="form-label">Логин</label>
							<input name="login" value="<?=$username?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите логин...">
						</div>
						<div class="col">
							<label for="exampleInputEmail1" class="form-label">Email</label>
							<input readonly name="mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email...">
						</div>
						<div class="col">
							<label for="exampleInputPassword1" class="form-label">Сбросить пароль</label>
							<input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль...">
						</div>
						<div class="col mb-4">
							<label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
							<input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="Повторите пароль...">
						</div>
						<div class="form-check mb-4">
							<input value="1" name="admin" class="form-check-input" type="checkbox" id="flexCheckChecked">
							<label class="form-check-label" for="flexCheckChecked">
								Admin
							</label>
						</div>
						<div class="col">
							<button name="edit-user" class="btn btn-primary" type="submit">Обновать</button>
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