<?php 
	include("path.php");
	include(SITE_ROOT . "/app/database/db.php");

	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-term'])){
		$posts = searchInTitleAndContent($_POST['search-term'], 'posts', 'users');
	}
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

	<!--Main start-->
	<div class="container">
		<div class="content row">
			<div class="main-content col-12">
				<h2>Результаты поиска</h2>

				<?php foreach ($posts as $post): ?>
					<div class="post row">
						<div class="img col-12 col-md-4">
							<img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?=$post['title']?>" class="img-thumbnail">
						</div>
						<div class="post_text col-12 col-md-8">
							<h3>
								<a href="<?=BASE_URL . 'single.php?post=' . $post['id'];?>"><?=substr($post['title'], 0, 80) . '...' ?></a>
							</h3>
							<i class="far fa-user"> <?= $post['id_user']?></i>
							<i class="far fa-calendar"> <?=$post['created_date'] ?></i>
							<p class="preview-text"><?=mb_substr($post['content'], 0, 55, 'UTF-8') . '...' ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

		</div>
	</div>
	<!--Main end-->

	<?php include("app/include/footer.php"); ?>

	<script src="https://kit.fontawesome.com/47a997ec54.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
	</script>
</body>

</html>