<div id="portfolio">
	<h2>Проекты и работы</h2>
	<div class="projects">
		<? foreach ($arList as $key => $value): ?>
			<div class="item">
				<img src="/static/images/upload/portfolio/<?=$value['id']?>.png" alt="" class="bimg preview">
				<h3 class="title"><a href="/portfolio/<?=$value['translit']?>"><?=$value['name']?></a></h3>
				<div class="descr">
					<a href="<?=$value['repository']?>"><img class="icon" src="/static/images/icons/github.png" alt=""></a>
					<a href="<?=$value['view']?>"><img class="icon" src="/static/images/icons/view.png" alt=""></a>
				</div>
			</div>
		<? endforeach; ?>
	</div>
</div>