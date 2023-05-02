<?
// Вывод сайдбара


if(isset($CORE['CURRENT']['URL']['SECTION'][2])) {
    $CORE['CURRENT']['SECTION']['HAS_SIDEBAR'] = 0;
	// Страница статьи
	$tmp = "item";
	$item = select("SELECT * FROM `articles` WHERE `translit`='".$CORE['CURRENT']['URL']['SECTION'][2]."' limit 1", "row");
}
else {
    $CORE['CURRENT']['SECTION']['HAS_SIDEBAR'] = 1;
	// Страница списка статей
	$tmp = "list";
	$arList = select("SELECT * FROM `articles` WHERE `active`=1  ORDER BY `id` DESC", "rows");
}

include($tmp.".php");
?>