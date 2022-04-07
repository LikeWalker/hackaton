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
							<a href="" class="header__link">Вопросы</a>
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
		<section class="intro">
			<div class="wrapper">
				<div class="intro__wrapper">
					<div class="intro__text">
						<h1 class="intro__title">
							Животные
						</h1>
						<p class="intro__subtitle">
							Возьми к себе любимого питомца
						</p>
						<form action="pets.php">
							<button class="intro__button">
							Получить
							</button>
						</form>
					</div>
					<div class="intro__img">
						<img src="img/Собака.png" class="img__intro">
					</div>
				</div>	
			</div>
		</section>
	<!-- intro end -->
	<!-- benefits start -->
	<section class="benefits">
		<div class="wrapper">
			<div class="benefits__links">
				
			</div>
			<h1 class="benefits__title section__title">
				Преимущества
			</h1>
			<div class="benefits__wrap benefit">
				<div class="benefit__info">
					<h3 class="benefit__title">
						Обширный спектр услуг
					</h3>
					<p class="benefit__description">
						В нашем сайте много различных услуг 
					</p>
				</div>
				<div class="benefit__pic2">
					<img src="img/Иконка услуг.png" class="benefit__thumb">
				</div>
			</div>
			<div class="benefits__bg">
				<div class="benefits__wrap benefit">
					<div class="benefit__pic">
						<img src="img/Group 51.png" class="benefit__thumb">
					</div>
					<div class="benefit__info">
						<h3 class="benefit__title">
							Связи с сервисами
						</h3>
						<p class="benefit__description">
							Связь с различными сервисами необходимым для вашего питомца 
						</p>
					</div>
				</div>
			</div>
			<div class="benefits__wrap benefit">
				<div class="benefit__info">
					<h3 class="benefit__title">
						Не выходя из дома
					</h3>
					<p class="benefit__description">
						Вы можете выбрать и приютить вашего питомца не выходя из дома
					</p>
				</div>
				<div class="benefit__pic2">
					<img src="img/Group 52.png" class="benefit__thumb">
				</div>
			</div>
		</div>
	</section>
	<!-- benefits end !-->
	<!-- services start !-->
	<div class="services">
		<div class="wrapper">
			<div class="services__links">
				<h2 class="service__title section__title">
				Наши услуги
				</h2>
				<nav class="service__nav">
					<ul class="service__list">
						<li class="service__item">
							<a href="#!" class="service__link">Увидеть всё</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="service__cards">
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/consulting.png" class="service__card__thumb">
					</div>
				</div>
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/free-icon-dog-training.png" class="service__card__thumb">
					</div>
				</div>
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/veterinarian.png" class="service__card__thumb">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- services end -->
	<!-- sub start -->
	<div class="wrapper">
		<div class="sub__links">
			<h2 class="sub__title section__title">
				Подписки
			</h2>
		</div>
		<div class="sub__cards">
			<div class="sub__card">
				<div class="sub__card__pic">
					<a href="https://yoomoney.ru/bill/pay/XNNVnANaZaA.220407">
						<img src="img/Group.png" class="sub__card__thumb">
					</a>
				</div>
			</div>
			<div class="sub__card">
				<div class="sub__card__pic">
					<a href="https://yoomoney.ru/bill/pay/TzMS2ANbmkk.220407">
						<img src="img/Group 2.png" class="sub__card__thumb">
					</a>
				</div>
			</div>
			<div class="sub__card">
				<div class="sub__card__pic">
					<a href="https://yoomoney.ru/bill/pay/E6NbegNbArM.220407">
						<img src="img/Group 3.png" class="sub__card__thumb">
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- sub end -->
	<!-- contacts start -->
	<div class="contacts">
			<div class="contact__logo">
				<img src="img/contact-icon.png">
			</div>
			<div class="contact__info">
				<img src="img/Контакт.png" class="">
			</div>
	</div>
	<div class="map">
          <a class="dg-widget-link" href="http://2gis.ru/yakutsk/firm/7037402698858785/center/129.75309491157535,62.028111066440104/zoom/15?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Якутска</a><div class="dg-widget-link"><a href="http://2gis.ru/yakutsk/firm/7037402698858785/photos/7037402698858785/center/129.75309491157535,62.028111066440104/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.ru/yakutsk/center/129.755657,62.029757/zoom/15/routeTab/rsType/bus/to/129.755657,62.029757╎Айыы Кыhата, Якутская национальная городская гимназия?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Айыы Кыhата, Якутская национальная городская гимназия</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":100 + '%',"height":215,"borderColor":"#a3a3a3","pos":{"lat":62.028111066440104,"lon":129.75309491157535,"zoom":15},"opt":{"city":"yakutsk"},"org":[{"id":"7037402698858785"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
        </div>
	<!-- contacts end -->
	</main>
</body>
</html>