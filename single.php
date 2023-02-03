<?php 
	include("path.php"); 
	include(SITE_ROOT . "/app/database/db.php");
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

	<!--Main start-->
	<div class="container">
		<div class="content row">
			<div class="main-content col-12 col-md-9">
				<h2>Заголовок конкретной статьи</h2>

				<div class="single__post row">
					<div class="img col-12">
						<img src="./assets/images/image_1.png" alt="image_1" class="img-thumbnail">
					</div>
					<div class="info">
						<i class="far fa-user">Имя автора</i>
						<i class="far fa-calendar">Mar 11, 2022</i>
					</div>
					<div class="single__post_text col-12">
						<h3>Заголовок третьего уровня</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores facere, voluptatum
							tenetur quisquam animi placeat id inventore itaque voluptatibus excepturi ratione incidunt dolorum
							explicabo voluptates iure quasi eius pariatur?</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores facere, voluptatum
							tenetur quisquam animi placeat id inventore itaque voluptatibus excepturi ratione incidunt dolorum
							explicabo voluptates iure quasi eius pariatur?</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores facere, voluptatum
							tenetur quisquam animi placeat id inventore itaque voluptatibus excepturi ratione incidunt dolorum
							explicabo voluptates iure quasi eius pariatur?</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores facere, voluptatum
							tenetur quisquam animi placeat id inventore itaque voluptatibus excepturi ratione incidunt dolorum
							explicabo voluptates iure quasi eius pariatur?</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores facere, voluptatum
							tenetur quisquam animi placeat id inventore itaque voluptatibus excepturi ratione incidunt dolorum
							explicabo voluptates iure quasi eius pariatur?</p>

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
						<li><a href="#">Программирование</a></li>
						<li><a href="#">Дизайн</a></li>
						<li><a href="#">Визуализация</a></li>
						<li><a href="#">Кейсы</a></li>
						<li><a href="#">Мотивация</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--Main end-->

	<?php include("app/include/footer.php"); ?>

	<script src="https://kit.fontawesome.com/47a997ec54.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>
</body>

</html>