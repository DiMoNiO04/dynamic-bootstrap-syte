<?php 
	include "../../path.php";
	include "../../app/controllers/topics.php";
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
				<div class="button row">
					<a href="<?php echo BASE_URL . "admin/topics/create.php";?>" class="col-3 btn btn-success">Создать</a>
					<span class="col-1"></span>
					<a href="<?php echo BASE_URL . "admin/posts/index.php";?>" class="col-3 btn btn-warning">Редактировать</a>
				</div>
				<div class="row title-table mb-4">
					<h2>Создать категорию</h2>
				</div>
				<div class="row add-post">
					<div class="mb-3 col-12 col-md-12 err">
						<p><?=$errMsg?></p>
					</div>
					<form action="create.php" method="post">
  						<div class="col">
    						<input value="<?=$name;?>" name="name" type="text" class="form-control" placeholder="Имя категории..." aria-label="Имя категории">
 						</div>
						 <div class="col">
 							<label for="content" class="form-label">Описание категории</label>
  							<textarea  name="description" class="form-control" id="content" rows="6"><?=$description;?></textarea>
						</div>
						<div class="col">
							<button name="topic-create" class="btn btn-primary" type="submit">Создать категорию</button>
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