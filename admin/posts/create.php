<?php 
	include "../../path.php";
	include "../../app/controllers/posts.php";
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
	<link rel="stylesheet" href="../../assets/css/admin.css">
</head>

<body>

	<?php include("../../app/include/header-admin.php"); ?>

	<div class="container">
		<?php include "../../app/include/sidebar-admin.php";?>

			<div class="posts col-9">
			<div class="button row">
					<a href="<?php echo BASE_URL . "admin/posts/create.php";?>" class="col-3 btn btn-success">Создать</a>
					<span class="col-1"></span>
					<a href="<?php echo BASE_URL . "admin/posts/index.php";?>" class="col-3 btn btn-warning">Редактировать</a>
				</div>
				<div class="row title-table">
					<h2>Добавление записи</h2>
				</div>
				<div class="row add-post">
					<form action="create.php" method="post" enctype="multipart/form-data">
  						<div class="col mb-4">
    						<input name="title" type="text" class="form-control" placeholder="Title..." aria-label="Название статьи">
 						</div>
						 <div class="col">
 							<label for="editor" class="form-label">Содержимое записи</label>
  							<textarea name="content" id="editor" class="form-control"rows="6"></textarea>
						</div>
						<div class="input-group col mb-4 mt-4">
							<input name="img" type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
							<button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
						</div>
						<select name="topic" class="form-select mb-4" aria-label="Default select example">
							<option selected>Категория поста:</option>
							<?php foreach ($topics as $key => $topic): ?>
                        <option value="<?=$topic['id']; ?>"><?=$topic['name'];?></option>
                     <?php endforeach; ?>
						</select>
						<div class="form-check mb-4">
							<input name="publish" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" checked>
							<label class="form-check-label" for="flexCheckChecked">
								Publish
							</label>
						</div>
						<div class="col col-6">
							<button class="btn btn-primary" name="add-post" type="submit">Добавить запись</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include("../../app/include/footer.php"); ?>

	<script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
	<script src="https://kit.fontawesome.com/47a997ec54.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
	</script>
	<script src="../../assets/js/index.js"></script>
</body>

</html>