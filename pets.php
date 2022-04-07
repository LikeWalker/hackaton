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
	<main class="main">
		<section class="profile">
			<div class="wrapper__profile">
				<div class="profile__wrapper">
					<div class="profile__text">
						<h1 class="profile__title">
							Питомцы
						</h1>
						<div class="profile__info">
							<?php
								$connect = mysqli_connect('127.0.0.1:3306', 'root', '', 'hackaton');
								$text = "SELECT * FROM pets";
								$query = mysqli_query($connect, $text);
								$line = $query->fetch_assoc();
								for ($i=0; $i < $query->num_rows; $i++) { 
									$line = $query->fetch_assoc();
							?>
							<div class="pets__icon">
								<form action="addprofile.php" method="POST">
								<img src="img/<?php echo $line['img']?>">
								<input style="display: none;" type="" name="img" value="<?php echo $line['img']?>">
								<div class="profile__info__text">
										<h1 class="pets__name">Кличка - <?php echo $line['name']?></h1>
										<input style="display: none;" type="" name="name" value="<?php echo $line['name']?>">
										<h1 class="pets__name">Пол - <?php echo $line['pol']?></h1>
										<input style="display: none;" type="" name="pol" value="<?php echo $line['pol']?>">
										<h1 class="pets__name">Возраст - <?php echo $line['age']?></h1>
										<input style="display: none;" type="" name="age" value="<?php echo $line['age']?>">
										<input style="display: none;" type="" name="id" value="<?php echo $line[id]?>">
										<button style="" class="pets__button">Выбрать</button>
									</form>
								</div>
							</div>
							<?php
								}
							?>
						</div>
					</div>
				</div>	
			</div>
		</section>
	<!-- intro end -->
	<!-- contacts end -->
	</main>
	<!-- header end -->
	<!-- sub end -->
	<!-- contacts start -->
		
	<!-- contacts end -->
</body>
</html>