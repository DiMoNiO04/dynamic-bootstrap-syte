<?php 
	include "../../path.php";
	include "../../app/controllers/comments.php";
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
					<h2>Управление комментариями</h2>
					<div class="col-1">ID</div>
					<div class="col-5">Текст</div>
					<div class="col-3">Автор</div>
					<div class="col-3">Управление</div>
				</div>
				<?php foreach($commentsForAdmin as $key => $comment):?>
					<div class="row post">
						<div class="id col-1"><?=$comment['id'];?></div>
						<div class="title col-5"><?=mb_substr($comment['comment'], 0, 40, 'UTF-8');?></div>

						<?php
							$user = $comment['email'];
							$user = explode('@', $user);
							$user = $user[0];
						?>

						<div class="author col-3"><?=$user . '@';?></div>
						<div class="del col-1"><a href="edit.php?delete_id=<?=$comment['id'];?>">Delete</a></div>

						<?php if($comment['status']): ?>
							<div class="status col-1"><a href="edit.php?publish=0&pub_id=<?=$comment['id'];?>">Unpublish</a></div>
						<?php else: ?>
							<div class="status col-1"><a href="edit.php?publish=1&pub_id=<?=$comment['id'];?>">Publish</a></div>
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