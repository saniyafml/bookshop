<?
 include 'conn.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">

	<link href="styles.css" rel="stylesheet" type="text/css">


    <title>Web на практике. CSS, HTML, JavaScript, MySQL, PHP для fullstack-разработчиков</title>
    <link rel="icon" type="image/png" href="media/icon.png">

  </head>
  <body>
  <!--	<div class="top-banner">
  		<i class="chg-icon chg-icon-close header-features__close js__close_top_banner"></i>
  		<div class="top-banner-image"></div>
  	</div>-->
  	<header>
		<div class="header">
			<div class="header-info">
				<div class="container">
						<div class="info-item">
							<a href="#">Бесплатная доставка в 533 магазина сети</a>
						</div>
						<div class="info-item">
							<a href="#">1000 пунктов самовывоза по всей России</a>
						</div>
						<div class="info-item">
							<a href="#">8(800)444-8-444 - круглосуточно</a>
						</div>
						<div class="info-item">
							<a href="#" style="margin-right: 0px;">Обратная связь</a>
						</div>
				</div>
			</div>
			<div class="header-menu">
				<div class="container">
						<div class="menu-item"><a href="#"><b>Россия, Волгоград</b></a></div>
						<div class="menu-item"><a href="#">Адреса магазинов</a></div>
						<div class="menu-item"><a href="#">Доставка и оплата</a></div>
						<div class="menu-item"><a href="#">Бонусная программа</a></div>
						<div class="menu-item"><a href="#"><b>Войти</b></a></div>
				</div>
			</div>
			<div class="header-content">
				<div class=container>
						<div class="content-item"><img src="media/logo.svg" width="160px" height="94px"></div>
						<div class="content-item">
							<form>
								<input class="search-input" type="text" name="q" placeholder="Поиск...">
								<button type="button" class="btn btn-primary search-btn"><img src="media/search.png" width="16px" height="16px"></button>
							</form>
						</div>
						<div class="content-item">
							<div class="row bucket">
								<div class="col-xl-5 col-md-5 col-sm-5 col-xs-5">
									<a href="#"><img src="media/basket.svg" style="align-self: center;"></a>
								</div>
								<div class="col-xl-7 col-md-7 col-sm-7 col-xs-7">
									<a href="#" ><b>
										<span>Корзина:</span>
										<span style="float: right;">0</span>
									</b></a>
									<br>
									<a href="#">
										<span>Закладки:</span>
										<span style="float: right;">0</span></a>
									<br>
									<a href="#">
										<span>Резерв:</span>
										<span  style="float: right;">0</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<nav class="catalog">
				<div class="container">
					<ul class="nav nav-pills">
	        			<li>
	        				<div class="dropdown">
	        					<a href=# class="nav-link px-2"><b>Книги</b></a>
	        					<div class="dropdown-content">
	        						<div class="column">
	        							<b>Жанры</b>
	        							<ul class="nav-items">
											<li><a href=#>Художественная литература</a></li>
											<li><a href=#>Книги для детей</a></li>
											<li><a href=#>Образование</a></li>
											<li><a href=#>Наука и техника</a></li>
											<li><a href=#>Общество</a></li>
											<li><a href=#>Деловая литература</a></li>
											<li><a href=#>Красота. Здоровье. Спорт</a></li>
											<li><a href=#>Увлечения</a></li>
											<li><a href=#>Психология</a></li>
											<li><a href=#>Эзотерика</a></li>
											<li><a href=#>Философия и религия</a></li>
											<li><a href=#>Искусство</a></li>
											<li><a href=#>Подарочные издания</a></li>
											<li><a href=#>Книги на иностранных языках</a></li>
										</ul>
									</div>
	        						<div class="column">
	        							<b>Подборки</b>
	        							<ul class="nav-items">
	        								<li><a href="#">Новинки литературы</a></li>
	        								<li><a href="#">Лучшие из лучших</a></li>
	        								<li><a href="#">Гав! 10 интересных книг о собаках</a></li>
	        								<li><a href="#">Скоро в продаже</a></li>
	        								<li><a href="#">Необычные чехлы для карточек</a></li>
	        							</ul>
	        						</div>
	        						<div class="column">
	        							<b>Издательства</b>
	        							<ul class="nav-items">
	        								<li><a href="#">Эксмо</a></li>
	        								<li><a href="#">АСТ</a></li>
	        								<li><a href="#">Азбука</a></li>
	        								<li><a href="#">Альпина Паблишер</a></li>
	        								<li><a href="#">Росмэн</a></li>
	        							</ul>
	        						</div>
	        						<div class="column">
	        							<b>Книга месяца</b>
	        							<img src="media/bookofthemonth.jpg">
	        						</div>
	        					</div>
	        				</div>
	        			</li>
	        			<li>
	        				<div class="dropdown">
	        					<a href=# class="nav-link px-2"><b>Канцтовары</b></a>
	        					<div class=dropdown-content>
	        						<div class="column">
	        							<ul class="nav-items">
	        								<li><a href="#">Бумажные изделия</a></li>
	        								<li><a href="#">Галантерея</a></li>
	        								<li><a href="#">Прочие канцтовары</a></li>
	        								<li><a href="#">Упаковка</a></li>
	        								<li><a href="#">Товары для художников</a></li>
	        								<li><a href="#">Электротовары</a></li>
	        								<li><a href="#">Пеналы</a></li>
	        								<li><a href="#">Офисные принадлежности</a></li>
	        								<li><a href="#">Письменные принадлежности</a></li>
	        								<li><a href="#">Чертежные принадлежности</a></li>
	        								<li><a href="#">Школьные товары</a></li>
	        							</ul>
	        						</div>
	        						<div class="column">
	        							<b>Товар месяца</b>
	        							<img src="media/productofthemonth.jpg">
	        						</div>			
	        					</div>
	        				</div>
	        			</li>
	        			<li>
	        				<div class="dropdown">
	        					<a href=# class="nav-link px-2"><b>Сувениры</b></a>	
	        					<div class="dropdown-content">
	        						<div class="column">
	        							<ul class="nav-items">
	        								<li><a href="#">Сувениры к празднику</a></li>
	        								<li><a href="#">Дом, Быт, Декор</a></li>
	        								<li><a href="#">Игры и Игрушки</a></li>
	        								<li><a href="#">Личные вещи</a></li>
	        								<li><a href="#">Мелочи сувенирные</a></li>
	        								<li><a href="#">Предсказания, пожелания, астрология, эзотерика</a></li>
	        								<li><a href="#">Сувенирные канцелярские и офисные принадлежности</a></li>
	        								<li><a href="#">Поздравительная атрибутика</a></li>
	        								<li><a href="#">Открытки и постеры</a></li>
	        								<li><a href="#">Календари</a></li>
	        							</ul>
	        						</div>	        						
	        					</div>
	        				</div>
	        			</li>
	        			<li>
	        				<div class="dropdown">
	        					<a href=# class="nav-link px-2"><b>Игры и игрушки</b></a>
	        					<div class="dropdown-content">
	        						<div class="column">
	        							<ul class="nav-items">
	        								<li><a href="#">Игры</a></li>
	        								<li><a href="#">Игрушки</a></li>
	        							</ul>
	        						</div>	
	        					</div>
	        				</div>
	        			</li>
	        			<li>
	        				<div class="dropdown">
	        					<a href=# class="nav-link px-2"><b>Творчество</b></a>
	        					<div class="dropdown-content">
	        						<div class="column">
	        							<ul class="nav-items">
	        								<li><a href="#">Наборы для детского творчества</a></li>
	        								<li><a href="#">Наборы для взрослого творчества</a></li>
	        								<li><a href="#">Заготовки</a></li>
	        								<li><a href="#">Инструменты и приспособления</a></li>
	        								<li><a href="#">Расходные материалы</a></li>
	        								<li><a href="#">Фурнитура для изготовления украшений</a></li>
	        								<li><a href="#">Декорирование</a></li>
	        								<li><a href="#">Бижутерия</a></li>
	        							</ul>		
	        						</div>
	        					</div>
	        				</div>
	        			</li>
	        			<li>
	        				<div class="dropdown">
	        					<a href=# class="nav-link px-2"><b>Распродажа</b></a>
	        					<div class="dropdown-content">
	        						<div class="column">
	        							<ul class="nav-items">
	        								<li><a href="#">Художественная литература</a></li>
	        								<li><a href="#">Книги для детей</a></li>
	        								<li><a href="#">Образование</a></li>
	        								<li><a href="#">Наука и техника</a></li>
	        								<li><a href="#">Общество</a></li>
	        								<li><a href="#">Деловая литература</a></li>
	        								<li><a href="#">Красота. Здоровье. Спорт</a></li>
	        								<li><a href="#">Увлечения</a></li>
	        								<li><a href="#">Психология</a></li>
	        								<li><a href="#">Эзотерика</a></li>
	        								<li><a href="#">Философия и религия</a></li>
	        								<li><a href="#">Искусство</a></li>
	        								<li><a href="#">Подарочные издания</a></li>
	        								<li><a href="#">Книги на иностранных языках</a></li>
	        							</ul>
	        						</div>
	        					</div>
	        				</div>
	        			</li>
	        			<li><a href=# class="nav-link px-2">Акции</a></li>
	        			<li><a href=# class="nav-link px-2">Что еще почитать?</a></li>
	        			<li><a href=# class="nav-link px-2">Школа -30%</a></li>
	        			<li><a href=# class="nav-link px-2">Из Instagram</a></li>
	      			</ul>
				</div>
			</nav>
		</div>	
	</header>
	<div class="main">
		<div class="container">
			<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  				<ol class="breadcrumb">
    				<li class="breadcrumb-item"><a href="#">Книжный магазин</a></li>
    				<li class="breadcrumb-item"><a href="#">Книги</a></li>
  				</ol>
			</nav>
		</div>
		<div class="container">
			<form>
				<input class="query-input" type="text" name="q" placeholder="Название... ">
				<input class="query-input" type="text" name="q" placeholder="Автор...">
				<input class="query-input" type="number" name="q" placeholder="Цена...">
				<button type="button" class="btn btn-primary search-btn query-button"><img src="media/search.png" width="16px" height="16px"></button>
			</form>
		</div>
		<div class="container">
			<div class="card-group">
				<?
				include 'query.php';
				foreach($arr as $value){
					echo '<div class="card">';
						echo '<div class="card-img-block">';
							echo '<a href="#" class="card-img-link"><img src="'.$value['image'].'" class="card-img" alt="..."></a>';
						echo '</div>';
						echo '<div class="card-body">';
							echo '<div class="card-text">';
								echo '<div class=book-info>' . $value['book'] . '</div>';
								echo '<div class=author>' . $value['author'] . '</div>';
							echo '</div>';
							echo '<div class="card-text">';
								echo '<div>' . $value['price'] . '</div>';
								echo '<button type="button" class="btn btn-primary">Купить</button>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				}
				?>	
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="row" style="margin-bottom: 25px">
				<div class="col-md-4">
					<h5>В наших магазинах</h5>
					<ul>
						<li>Адреса магазинов</li>
						<li>Услуги</li>
						<li>Наши партнеры</li>
						<li>О компании</li>
						<li>Хотите у нас работать?</li>
					</ul>
				</div>
				<div class="col-md-4">
					<h5>В интернет-магазине</h5>
					<ul>
						<li>Доставка и оплата</li>
						<li>Вопросы и ответы</li>
						<li>Акции</li>
						<li>Книги</li>
						<li>Сувениры</li>
						<li>Правила продажи</li>
						<li>Политика конфиденциальности</li>
						<li>Мобильная версия сайта</li>
					</ul>
				</div>
				<div class="col-md-4">
					<h5>Подписка на новости</h5>
					<div class="row">
						<p style="line-height: 20px; margin-top: 5px;">Будьте в курсе наших акций:</p>
						<form>
							<input class="email-input" type="text" name="email" placeholder="Email" >
							<button type="button" class="btn btn-primary">Подписаться</button>
						</form>
					</div>
					<div class="row">
						<div style="line-height: 40px">Мы в соцсетях:</div>
						<div class="sns">
								<ul>
									<li>
										<a href="#">
											<div class="sns-item">
												<div class="sns-vk"></div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="sns-item">
												<div class="sns-ok"></div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="sns-item">
												<div class="sns-fb"></div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="sns-item">
												<div class="sns-twt"></div>
											</div>
										</a>
									</li>
								</ul>
							</div>
					</div>
					<div class="row">
						<div class="col-xl-6 col-sm-6 store"><a href="#"><img src="media/appstore.svg"></a></div>
						<div class="col-xl-6 col-sm-6 store"><a href="#"><img src="media/google-play.svg"></a></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 copyright">
					<p>2011—2021, ООО «Новый Книжный Центр». Перепечатка материалов сайта возможна только с указанием активной ссылки на сайт «Читай–город».</p>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-6">Принимаем к оплате</div>
						<div class="col-md-6">
							<div class="row pay-cards">
								<div class="col-md-4 pay-card"><img src="media/visa.svg"></div>
								<div class="col-md-4 col-sm-4 pay-card"><img src="media/master.svg"></div>
								<div class="col-md-4 col-sm-4 pay-card"><img src="media/mir.svg"></div>
							</div>							
						</div>
					</div>											
				</div>
			</div>
		</div>
	</div>
	</div>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>