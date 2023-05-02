<!-- Лента блога -->
<div id="blog_list">

	<!-- Блок анонса статьи -->
	<? foreach($arList as $item): ?>
	<div class="item">
		<h2><?=$item["name"]?></h2>
		<div class="date"><?=$item["add_created"]?></div>
		<div class="inner">
			<img src="/static/images/upload/blog/<?=$item["id"]?>.jpg" alt="" class="preview">
			<div class="anons">
				<?=$item["anons"]?>
			</div>
		</div>
		<div class="btn_area">
		  	<a href="/blog/<?=$item["translit"]?>" class="btn more">Читать далее</a>
		</div>
	</div>
	<? endforeach; ?>
	
</div>