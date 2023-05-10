<?
function p($text) {
	echo "<pre style=\"white-space: pre-wrap;background: #D9D9D9;padding: 15px;margin: 15px 0;\">";
	print_r($text);
	echo "</pre>";
}
function redirect($url) {
    // die("<script>window.location.href='{$url}'</script>");
    header("Location: ".$url);
}
?>