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
					<a href="full.php" class="header__logo-link">
						<img src="img/Logo.png" class="header__logo-link-picture">
						</img>
					</a>
				</div>
				<nav class="header__nav">
					<ul class="header__list">
						<li class="header__item">
							<a href="full.php" class="header__link">О сайте</a>
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
									</div>
									<div class="profile__card">
										<div class="profile__card__text">
											<p class="profile__text">
												Логин - <?php echo $stroka['login']; ?>
											</p>
											<p class="profile__text">
												Пол - <?php echo $stroka['pol']; ?>
											</p>
											<p class="profile__text">
												Дата рождения - <?php echo $stroka['birthday']; ?>
											</p>
										</div>
									</div>
									<div class="profile__card">
										<div class="profile__link">
											<a href="redact.php" class="profile__link__text">Изменить</a>
										</div>
									</div>
								</div>
							</form>
						</div>
						<?php
							$con = mysqli_connect('127.0.0.1:3306', 'root','','hackaton');
					        $query = mysqli_query($con, "SELECT * FROM profile");
					        $stroka = $query->fetch_assoc();
						?>
						<div class="profile__text">
						<form action="add.php" method="POST">
							<h1 class="profile__title">
									Питомец
							</h1>
								<div class="profile__info">
									<div class="profile__card">
										<div class="profile__pic">
											<img src="img/<?php echo $stroka['img']?>" class="profile__icon">
										</div>
									</div>
									<div class="profile__card">
										<div class="profile__card__text">
											<p class="profile__text">
												Кличка - <?php echo $stroka['name']; ?>
											</p>
											<p class="profile__text">
												Пол - <?php echo $stroka['pol']; ?>
											</p>
											<p class="profile__text">
												Возраст - <?php echo $stroka['age']; ?>
											</p>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="profile__text">
							<p class="pet__service">
									Телефонная консультация -  +7 (914) 108-28-66 
							</p>
							<a  href="https://yakutsk.zoon.ru/vet/veterinarnaya_klinika_polivet/" class="pet__service">
									Записаться к ветеринару
							</a href="">
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- intro end -->
	<!-- contacts end -->
	</main>
	<script type="text/javascript">
		
	</script>
</body>
</html>