<header class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<h1>
						<a href="<?php echo BASE_URL?>">My blog</a>
					</h1>
				</div>
				<nav class="col-8">
					<ul>
						<li><a href="<?php echo BASE_URL?>">Главная</a></li>
						<li><a href="#">О нас</a></li>
						<li><a href="#">Услуги</a></li>
						<li> 
							<!--Проверка на вход-->
							<?php if(isset($_SESSION['id_user'])): ?>
								<a href="#">
									<i class="fa-solid fa-user"></i>
									<?php echo $_SESSION['login']; ?>
								</a>
								<ul>
									<!--Проверка на вход: Если админ-->
									<?php if($_SESSION['admin']): ?>
										<li><a href="#">Админ панель</a></li>
									<?php endif; ?>
									<li><a href="#">Выход</a></li>
								</ul>
							<?php else: ?>
								<a href="<?php echo BASE_URL . 'log.php';?>">
									<i class="fa-solid fa-user"></i>
									Вход
								</a>
								<ul>
									<li><a href="<?php echo BASE_URL . 'reg.php';?>">Регистрация</a></li>
								</ul>
							<?php endif; ?>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>