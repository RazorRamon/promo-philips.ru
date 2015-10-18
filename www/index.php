<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Заголовок</title>
		<meta name="description" content="opisanie" />
		<meta name="keywords" content="keywords" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />

		<link rel="icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/" />
		
		<!-- Подключение jQuery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
		
		<!-- Подгрузка новых товаров, участвующих в акции -->
		<script type="text/javascript">
			setInterval(function some(){
				jQuery.get('products.php', function(data) {
				    $('.poducts').after(data);
				});
			}, 10000);
		</script>
	</head>
	<body>
		<header>
			<div class="block_header">
				<div class="top_menu">&nbsp;</div>
				<div class="banner_post">
					<div class="post_logo">&nbsp;</div>
					<div class="philips_text">Philips тоже доставляет;)<br />Скидка 30% сотрудникам Почты России на покупку первоклассной техники.</div>
					<div class="post_img">&nbsp;</div>
				</div>
				<div class="clear_div">&nbsp;</div>
			</div>
		</header>
		
		<main>
			<div class="block_main">
				<h2 class="title">Товары, участвующие в акции:</h2>
				<img class="shild" src="/images/shild.png" />
				<div class="poducts">&nbsp;</div>
				<div class="products-string">&nbsp;</div>
				<div class="rules">
					<h2 class="title">Правила совместной акции:</h2>
					<p>Срок действия Акции: с 01.09.2015 г.  по 30.09.2015 г.  (по московскому времени 23:59) включительно.<br />
	Срок действия промо-кода по 31.10.2015 (по московскому времени 23:59) включительно.<br />
	Скидка по одному  промо-коду  предоставляется на одну покупку, состоящую  не более,  чем из 2 (двух) товаров.</p>
					<a href="#">Полные условия акции</a>
				</div>
				<div class="clear_div">&nbsp;</div>
			</div>
		</main>
		
		<footer>
			<img src="/images/footer.png" />
		</footer>
	</body>
</html>