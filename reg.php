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

	<header class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<h1>
						<a href="/">My blog</a>
					</h1>
				</div>
				<nav class="col-8">
					<ul>
						<li><a href="#">Главная</a></li>
						<li><a href="#">О нас</a></li>
						<li><a href="#">Услуги</a></li>
						<li>
							<a href="#">
								<i class="fa-solid fa-user"></i>
								Кабинет
							</a>
							<ul>
								<li><a href="#">Админ панель</a></li>
								<li><a href="#">Выход</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!--Header end-->


	<!--Form start-->
	<div class="container reg-form">
		<form class="row justify-content-center" method="post" action="reg.php">
			<h2>Форма регистрации</h2>
			<div class="mb-3 col-12 col-md-4">
				<label for="formGroupExampleInput" class="form-label">Ваш логин</label>
				<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин...">
			 </div>
			 <div class="w-100"></div>
			<div class="mb-3 col-12 col-md-4">
			  <label for="exampleInputEmail1" class="form-label">Email</label>
			  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			  <div id="emailHelp" class="form-text">Ваш email адрес не будет использован для спама!</div>
			</div>
			<div class="w-100"></div>
			<div class="mb-3 col-12 col-md-4">
			  <label for="exampleInputPassword1" class="form-label">Пароль</label>
			  <input type="password" class="form-control" id="exampleInputPassword1">
			</div>
			<div class="w-100"></div>
			<div class="mb-3 col-12 col-md-4">
				<label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
				<input type="password" class="form-control" id="exampleInputPassword2">
			 </div>
			 <div class="w-100"></div>
			 <div class="mb-3 col-12 col-md-4">
				<button type="button" class="btn btn-secondary">Зарегистрироваться</button>
				<a href="aut.php">Войти</a>
			 </div>
		 </form>
	</div>
	<!--Form end-->


	<!--Footer start-->
	<div class="footer container-fluid">
		<div class="footer-content container">
			<div class="row">
				<div class="footer-section about col-md-4 col-12">
					<h3 class="logo-text">Мой блог</h3>
					<p>
						Мой блог - это блог сделанный с целью обучения
					</p>
					<div class="contact">
						<span><i class="fas fa-phone"></i>&nbsp; 123-456-789</span>
						<span><i class="fas fa-envelope"></i>&nbsp; info@myblog.com</span>
					</div>
					<div class="socials">
						<a href="#"><i class="fab fa-facebook"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-youtube"></i></a>
					</div>
				</div>

				<div class="footer-section links col-md-4 col-12">
					<h3>Quick Links</h3>
					<br>
					<ul>
						<a href="#"><li>События</li></a>
						<a href="#"><li>Команда</li></a>
						<a href="#"><li>Упражнения</li></a>
						<a href="#"><li>Галлерея</li></a>
						<a href="#"><li>Что-то о еде</li></a>
					</ul>
				</div>

				<div class="footer-section contact-form col-md-4 col-12">
					<h3>Контакты</h3>
					<br>
					<form action="index.php" method="post">
						<input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
						<textarea name="message" rows="4" class="text-input contact-input" placeholder="Your message..."></textarea>
						<button type="submit" class="btn btn-big contact-btn">
							<i class="fas fa-envelope"></i>
							Отправить
						</button>
					</form>
				</div>

			</div>

			<div class="footer-bottom">
				&copy; myblog.com | Designed by Razumov
			</div>
		</div>
	</div>
	<!--Footer end-->

	<script src="https://kit.fontawesome.com/47a997ec54.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>
</body>

</html>