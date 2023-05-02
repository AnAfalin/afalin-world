<?php 
// подключение ядра
require_once($_SERVER["DOCUMENT_ROOT"]."/core/app/index.php");


// контроллер страницы
$CORE["CURRENT"]["URL"]["SECTION"] = array_filter(explode("/", $_SERVER["REQUEST_URI"]));
// p($CORE);
if(empty($CORE["CURRENT"]["URL"]["SECTION"])) {
	$CORE["CURRENT"]["URL"]["SECTION"][1] = "main";
}
if(!file_exists($_SERVER["DOCUMENT_ROOT"]."/core/dev/controller/".$CORE["CURRENT"]["URL"]["SECTION"][1]."/controller.php")) {
	$CORE["CURRENT"]["URL"]["SECTION"][1] = "404";
}
$controller_path = $_SERVER["DOCUMENT_ROOT"]."/core/dev/controller/".$CORE["CURRENT"]["URL"]["SECTION"][1]."/controller.php";

// вывод страницы
require_once($_SERVER["DOCUMENT_ROOT"]."/core/dev/design.php");


?>	