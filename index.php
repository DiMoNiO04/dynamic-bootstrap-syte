<?php 
	include("path.php");
	include("app/controllers/topics.php");
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
				<div class="carousel-item active">
					<img src="./assets/images/image_1.png" class="d-block w-100" alt="image_1">
					<div class="carousel-caption-hack carousel-caption d-none d-md-block">
						<h5><a href="">First slide label</a></h5>
					</div>
				</div>
				<div class="carousel-item">
					<img src="./assets/images/image_2.png" class="d-block w-100" alt="image_2">
					<div class="carousel-caption-hack carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
					</div>
				</div>
				<div class="carousel-item">
					<img src="./assets/images/image_3.png" class="d-block w-100" alt="image_3">
					<div class="carousel-caption-hack carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
					</div>
				</div>
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
				<div class="post row">
					<div class="img col-12 col-md-4">
						<img src="./assets/images/image_small.png" alt="image_3" class="img-thumbnail">
					</div>
					<div class="post_text col-12 col-md-8">
						<h3>
							<a href="#">Прикольная статья на тему динамического сайта</a>
						</h3>
						<i class="far fa-user">Имя автора</i>
						<i class="far fa-calendar">Mar 11, 2022</i>
						<p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint est maxime ipsum
							aspernatur aliquid? Perferendis, veritatis. Quidem ullam omnis quo, sunt id quas illum ad sapiente
							recusandae perferendis delectus saepe.
						</p>
					</div>
				</div>

				<div class="post row">
					<div class="img col-12 col-md-4">
						<img src="./assets/images/image_small.png" alt="image_3" class="img-thumbnail">
					</div>
					<div class="post_text col-12 col-md-8">
						<h3>
							<a href="#">Прикольная статья на тему динамического сайта</a>
						</h3>
						<i class="far fa-user">Имя автора</i>
						<i class="far fa-calendar">Mar 11, 2022</i>
						<p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint est maxime ipsum
							aspernatur aliquid? Perferendis, veritatis. Quidem ullam omnis quo, sunt id quas illum ad sapiente
							recusandae perferendis delectus saepe.
						</p>
					</div>
				</div>

				<div class="post row">
					<div class="img col-12 col-md-4">
						<img src="./assets/images/image_small.png" alt="image_3" class="img-thumbnail">
					</div>
					<div class="post_text col-12 col-md-8">
						<h3>
							<a href="#">Прикольная статья на тему динамического сайта</a>
						</h3>
						<i class="far fa-user">Имя автора</i>
						<i class="far fa-calendar">Mar 11, 2022</i>
						<p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint est maxime ipsum
							aspernatur aliquid? Perferendis, veritatis. Quidem ullam omnis quo, sunt id quas illum ad sapiente
							recusandae perferendis delectus saepe.
						</p>
					</div>
				</div>

				<div class="post row">
					<div class="img col-12 col-md-4">
						<img src="./assets/images/image_small.png" alt="image_3" class="img-thumbnail">
					</div>
					<div class="post_text col-12 col-md-8">
						<h3>
							<a href="#">Прикольная статья на тему динамического сайта</a>
						</h3>
						<i class="far fa-user">Имя автора</i>
						<i class="far fa-calendar">Mar 11, 2022</i>
						<p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint est maxime ipsum
							aspernatur aliquid? Perferendis, veritatis. Quidem ullam omnis quo, sunt id quas illum ad sapiente
							recusandae perferendis delectus saepe.
						</p>
					</div>
				</div>
			</div>

			<div class="sidebar col-12 col-md-3">

				<div class="section search">
					<h3>Поиск</h3>
					<form action="/" method="post">
						<input type="text" name="search-term" class="text-input" placeholder="Введите...">
					</form>
				</div>

				<div class="section topics">
					<h3>Категории</h3>
					<ul>
						<?php foreach($topics as $key => $topic): ?>
							<li>
								<a href="#"><?=$topic['name'];?></a>
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