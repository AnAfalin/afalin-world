<?
$arList = select("SELECT * FROM `articles` WHERE `active`=1 ORDER BY `id` DESC limit 3", "rows");

// Вывод сайдбара
$CORE['CURRENT']['SECTION']['HAS_SIDEBAR'] = 1;
?>
<!-- Главная страница -->
<div id="main">
	<h1>Welcome to my website!</h1>
	<p>Hello, my dear guest! My name is Anastasia!</p>
	<p>Эта страничка обо мне, моих главных увлечениях и достижениях.</p>
	<p>На этом сайте можно найти информацию обо мне, моих проектах, контактную информацию, а также разные заметки в области программирования.</p>
	<div class="main_img">
		<img src="static/images/firstpage_image.jpg" alt="" class="bimg">
	</div>
</div>
<?
// p($_SERVER);
// include($_SERVER['DOCUMENT_ROOT']."/core/dev/controller/blog/list.php");
?>
<!-- Новости -->
<!---->
<!--<div id="news">-->
<!--	<h2>Последние обновления на сайте:</h2>	-->
<!--	--><?// foreach($arList as $item): ?>
<!--		<div class="item">-->
<!--			<div class="col c1">-->
<!--				<img src="static/images/upload/blog/--><?php //=$item["id"]?><!--.jpg" alt="" class="preview">-->
<!--			</div>-->
<!--			<div class="col c2">-->
<!--				<p>Добавлена статья <a href="/--><?php //=$item["section"]?><!--/--><?php //=$item["translit"]?><!--">--><?php //=$item["name"]?><!--</a></p>-->
<!--				<div class="date">--><?php //=$item["add_created"]?><!--</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	--><?// endforeach; ?>
<!--</div>-->

