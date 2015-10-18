<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>���������</title>
		<meta name="description" content="opisanie" />
		<meta name="keywords" content="keywords" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />

		<link rel="icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/" />
		
		<!-- ����������� jQuery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
		
		<!-- ��������� ����� �������, ����������� � ����� -->
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
					<div class="philips_text">Philips ���� ����������;)<br />������ 30% ����������� ����� ������ �� ������� ������������� �������.</div>
					<div class="post_img">&nbsp;</div>
				</div>
				<div class="clear_div">&nbsp;</div>
			</div>
		</header>
		
		<main>
			<div class="block_main">
				<h2 class="title">������, ����������� � �����:</h2>
				<img class="shild" src="/images/shild.png" />
				<div class="poducts">&nbsp;</div>
				<div class="products-string">&nbsp;</div>
				<div class="rules">
					<h2 class="title">������� ���������� �����:</h2>
					<p>���� �������� �����: � 01.09.2015 �.  �� 30.09.2015 �.  (�� ����������� ������� 23:59) ������������.<br />
	���� �������� �����-���� �� 31.10.2015 (�� ����������� ������� 23:59) ������������.<br />
	������ �� ������  �����-����  ��������������� �� ���� �������, ���������  �� �����,  ��� �� 2 (����) �������.</p>
					<a href="#">������ ������� �����</a>
				</div>
				<div class="clear_div">&nbsp;</div>
			</div>
		</main>
		
		<footer>
			<img src="/images/footer.png" />
		</footer>
	</body>
</html>