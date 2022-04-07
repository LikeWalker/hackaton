<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Hackaton</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styl.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
</head>
<body>
	<!-- header start -->
	<?php
		$con = mysqli_connect('127.0.0.1:3306', 'root','','hackaton');
        $query = mysqli_query($con, "SELECT * FROM users");
        $stroka = $query->fetch_assoc();
	?>
	<header class="header">
		<div class="wrapper">
			<div class="header__wrapper">
				<div class="header__logo">
					<a href="/" class="header__logo-link">
						<img src="img/Logo.png" class="header__logo-link-picture">
						</img>
					</a>
				</div>
				<nav class="header__nav">
					<ul class="header__list">
						<li class="header__item">
							<a href="#!" class="header__link">О сайте</a>
						</li>
						<li class="header__item">
							<a href="#!" class="header__link">Отзывы</a>
						</li>
						<li class="header__item">
							<a href="#!" class="header__link">Вопросы</a>
						</li>
						<li class="header__item">
							<a href="#!" class="header__link">+7 (914) 108-28-66 </a>
						</li>
						<li class="header__item">
							<a href="profile.php" class="header__link"><?php echo $stroka['login']; ?></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- header end -->
	<!-- intro start -->
	<main class="main">
		<section class="profile">
			<div class="wrapper__profile">
				<div class="profile__wrapper">
					<div class="profile__text">
						<form action="add.php" method="POST">
							<h1 class="profile__title">
								Личный кабинет
							</h1>
							<div class="profile__info">
								<div class="profile__card">
									<div class="profile__pic">
										<img src="img/ava.png" class="profile__icon">
									</div>
									<div style="margin-left:  15px; width: 133px; background-color: rgba(0,0,0,0.7)">
										<p data-toggle="modal" data-target="#exampleModal" class="text-white update">Обновить фотографию</p>
									</div>
								</div>
								<div class="profile__card">
									<div class="profile__card__text">
										<form action="redact-all.php" method="POST">
											<p class="profile__text">
												Логин - <input type="" name="login" value="<?php echo $stroka['login']?>">
											</p>
											<p class="profile__text">
												Пол - <input type="" name="pol" value="<?php echo $stroka['pol']?>">
											</p>
											<p class="profile__text">
												Дата рождения - <input type="" name="birthday" value="<?php echo $stroka['birthday']?>">
											</p>
											<button> Сохранить </button>
										</form>	
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>	
			</div>
		</section>
	<!-- intro end -->
	<!-- contacts end -->
	</main>
</body>
</html>