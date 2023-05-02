<?
// Вывод сайдбара
$CORE['CURRENT']['SECTION']['HAS_SIDEBAR'] = 0;

if(isset($CORE['CURRENT']['URL']['SECTION'][2])) {
	// Страница статьи
	$tmp = "item";
	$item = select("SELECT * FROM `projects` WHERE `translit`='".$CORE['CURRENT']['URL']['SECTION'][2]."' limit 1", "row");
}
else {
	// Страница списка статей
	$tmp = "list";
	$arList = select("SELECT * FROM `projects` WHERE `active`= 1 ORDER BY `id` DESC", "rows");
}

include($tmp.".php");
?>


