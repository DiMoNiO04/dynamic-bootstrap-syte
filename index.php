<?php 
	include("path.php");
	include("app/controllers/topics.php");
	
	$posts = selectAllFromPostsWithUsersOnIndex('posts', 'users');
	$topTopic = selectTopTopicsFromPostsOnIndex('posts');
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
	<link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>

	<?php include("app/include/header.php"); ?>

	<!--Carousel start-->
	<div class="container">
		<div class="row">
			<h2 class="slider-title">Топ публикаций</h2>
		</div>
		<div id="carouselExampleCaptions" class="carousel slide">

			<div class="carousel-inner">
				<?php foreach($topTopic as $key => $post): ?>
					<?php if($key == 0): ?>
						<div class="carousel-item active">
					<?php else: ?>
						<div class="carousel-item">
					<?php endif; ?>
						<img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" class="d-block w-100" alt="<?=$post['title']?>">
						<div class="carousel-caption-hack carousel-caption d-none d-md-block">
							<h5><a href="<?=BASE_URL . 'single.php?post=' . $post['id'];?>"><?=substr($post['title'], 0, 120) . '...' ?></a></h5>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
	<!--Carousel end-->


	<!--Main start-->
	<div class="container">
		<div class="content row">
			<div class="main-content col-12 col-md-9">
				<h2>Последние публикации</h2>

				<?php foreach ($posts as $post): ?>
					<div class="post row">
						<div class="img col-12 col-md-4">
							<img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?=$post['title']?>" class="img-thumbnail">
						</div>
						<div class="post_text col-12 col-md-8">
							<h3>
								<a href="<?=BASE_URL . 'single.php?post=' . $post['id'];?>"><?=substr($post['title'], 0, 80) . '...' ?></a>
							</h3>
							<i class="far fa-user"> <?= $post['username']?></i>
							<i class="far fa-calendar"> <?=$post['created_date'] ?></i>
							<p class="preview-text"><?=mb_substr($post['content'], 0, 55, 'UTF-8') . '...' ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="sidebar col-12 col-md-3">

				<div class="section search">
					<h3>Поиск</h3>
					<form action="search.php" method="post">
						<input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
					</form>
				</div>

				<div class="section topics">
					<h3>Категории</h3>
					<ul>
						<?php foreach($topics as $key => $topic): ?>
							<li>
								<a href="<?=BASE_URL . 'category.php?id=' . $topic['id'];?>"><?=$topic['name'];?></a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
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