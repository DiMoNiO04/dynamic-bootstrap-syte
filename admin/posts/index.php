<?php 
	include "../../path.php";
	include "../../app/controllers/posts.php";
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
					<a href="<?php echo BASE_URL . "admin/posts/create.php";?>" class="col-3 btn btn-success">Создать</a>
					<span class="col-1"></span>
					<a href="<?php echo BASE_URL . "admin/posts/index.php";?>" class="col-3 btn btn-warning">Редактировать</a>
				</div>
				<div class="row title-table">
					<h2>Управление записями</h2>
					<div class="col-1">ID</div>
					<div class="col-5">Название</div>
					<div class="col-2">Автор</div>
					<div class="col-4">Управление</div>
				</div>
				<?php foreach($postsAdmin as $key => $post):?>
					<div class="row post">
						<div class="id col-1"><?=$key + 1;?></div>
						<div class="title col-5"><?=$post['title'];?></div>
						<div class="author col-2"><?=$post['username'];?></div>
						<div class="red col-1"><a href="edit.php?id=<?=$post['id'];?>">Edit</a></div>
						<div class="del col-1"><a href="edit.php?delete_id=<?=$post['id'];?>">Delete</a></div>

						<?php if($post['status']): ?>
							<div class="status col-2"><a href="edit.php?publish=0&pub_id=<?=$post['id'];?>">Unpublish</a></div>
						<?php else: ?>
							<div class="status col-2"><a href="edit.php?publish=1&pub_id=<?=$post['id'];?>">Publish</a></div>
						<?php endif ?>

					</div>
				<?php endforeach;?>
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