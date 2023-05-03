<?
$arList = select("SELECT * FROM `articles` WHERE `active`=1 ORDER BY `id` DESC limit 3", "rows");

// Вывод сайдбара
$CORE['CURRENT']['SECTION']['HAS_SIDEBAR'] = 1;

$tmp = "template";
include($tmp.".php");
?>


