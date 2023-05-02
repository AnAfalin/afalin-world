<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">

<link rel="icon" type="image/png" href="/favicon.png">
<link rel="stylesheet" href="/static/custom.css">
<link rel="stylesheet" type="text/css" href="https://nst1.gismeteo.ru/assets/flat-ui/legacy/css/informer.min.css">
<link rel="stylesheet" href="/static/fancy/jquery.fancybox.min.css">
<link rel="stylesheet" href="/static/highlight/default.min.css">
<link rel="stylesheet" href="/static/highlight/atom-one-dark.min.css">

<title>Afalin world</title>

<script src="/static/jquery-3.6.3.min.js"></script>
<script src="/static/fancy/jquery.fancybox.min.js"></script>
<script src="/static/custom.js"></script>
<script src="/static/highlight/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
</head>

<body>
<div id="wrapper">

	<header>
		<div class="container cpn">
<!--			<img src="/static/images/garland.gif" alt="" class="garland"> -->
			<!-- Логотип и название сайта -->
			<div class="row c1">
				<a href="index.html" id="logo">
					<img src="/static/images/logo.png" alt="">
				</a>
				<div class="title">
					<span>afalin world</span>
					<p>site about afalin's interests</p>
				</div>
			</div>

			<!-- Навигационная панель -->
			<nav>
				<a href="/">Главная</a>
				<a href="/about">Обо мне</a>
				<a href="/portfolio">Портфолио</a>
				<a href="/blog">Блог</a>
				<a href="/contacts">Контакты</a>
			</nav>

		</div>
	</header>

	<div id="page" class="wide">
		<div class="container">
			<div id="section">

				<? require_once($controller_path) ?>

			</div>


			<?php 
			if($CORE['CURRENT']['SECTION']['HAS_SIDEBAR']) {
				require_once($_SERVER['DOCUMENT_ROOT']."/core/dev/inc/sidebar.php");
			}
			?>
			<!-- Правая колонка с полезными ссылками -->
			
		
		</div>
	</div>
</div>
<footer>
	<div class="container">
		<div class="title">afalin world</div>
		<div class="copy">&copy; 2022 - <?=date("Y")?></div>
	</div>
</footer>
</body>
</html>