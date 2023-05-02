<?
require_once($_SERVER["DOCUMENT_ROOT"]."/core/app/index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<script  src="/static/jquery-3.6.3.min.js"></script>
<script>
$(document).ready(function() {

	// Транслитерация в латинский алфавит
	function translit(from) {
		from = from.toLowerCase();
		var arLetter = {'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'yo', 'ж': 'zh', 'з': 'z', 'и': 'i', 'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n', 'о': 'o', 'п': 'p', 'р': 'r', 'с': 's', 'т': 't', 'у': 'u', 'ф': 'f', 'х': 'kh', 'ц': 'c', 'ч': 'ch', 'ш': 'sh', 'щ': 'shch', 'ь': '', 'ъ': '', 'ы': 'y', 'э': 'eh', 'ю': 'yu', 'я': 'ya'},
			to = '';
		for(var i = 0, flen = from.length; i < flen; i++) {
			if(arLetter[from[i]]) {
				to += arLetter[from[i]];
			}
		}
		return to;
	}
	$("input[name='name']").keyup(function(event) {
		$("input[name='translit']").val(translit($(this).val()));
	});	

});
</script>
</head>
<body>

<table>
	<tr>
		<th>id</th>
		<th>Заголовок</th>
		<th>Транслитерация</th>
		<!-- <th>Анонс</th> -->
		<!-- <th>Текст</th> -->
		<th>Активность</th>
		<th>Дата создания</th>
	</tr>
	<? foreach(select("SELECT * FROM `articles`") as $article): ?>
	<tr>
		<td><?=$article["id"]?></td>
		<td><?=$article["name"]?></td>
		<td><?=$article["translit"]?></td>
		<?/*<td><?=$article["anons"]?></td>
		<td><?=$article["text"]?></td>*/?>
		<td><?=$article["active"]?></td>
		<td><?=$article["add_created"]?></td>
		<td>
			<form method="post">
				<input type="hidden" name="edit" value="<?=$article["id"]?>">
				<input type="submit" value="edit">
			</form>
		</td>
		<td>
			<form method="post">
				<input type="hidden" name="delete" value="<?=$article["id"]?>">
				<input type="submit" value="delete">
			</form>
		</td>
	</tr>		
	<? endforeach; ?>
</table>
<?
if(@$_POST['edit']) {
	// update
}
if(@$_POST['delete']) {
	// delete
	mysqli_query($sqlConnect, "DELETE FROM `articles` WHERE `id`=".$_POST['delete']);
}
?>

<form method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>
				<label for="name">Заголовок</label>
			</td> 
			<td>
				<input type="text" name="name" id="name">
			</td>
		</tr>		
		<tr>
			<td>
				<label for="translit">Транслитерация</label>
			</td> 
			<td>
				<input type="text" name="translit" id="translit">
			</td>
		</tr>
		<tr>
			<td>
				<label for="anons">Анонс</label>
			</td> 
			<td>
				<textarea type="text" name="anons" id="anons"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label for="text">Текст статьи</label>
			</td> 
			<td>
				<textarea type="text" name="text" id="text"></textarea>
			</td>
		</tr>		
		<tr>
			<td colspan="2">
				<input type="checkbox" name="active" id="active" value="1" checked>
				<label for="active">Активность</label>
			</td> 
		</tr>	
		<tr>
			<td>
				<label for="article_preview">Превью статьи</label>
			</td>
			<td>
				<input type="file" name="article_preview" id="article_preview" accept=".jpg, .png">
			</td>		
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Создать статью" name="create">
			</td>
		</tr>
	</table>

</form>

<pre>
<?
if(!empty($_POST["create"])) {

	$create_article_status = mysqli_query($sqlConnect, "INSERT INTO `articles` VALUES (
		0, 
		'".$_POST['name']."',
		'".$_POST['translit']."', 
		'".$_POST['anons']."', 
		'".$_POST['text']."', 
		'".$_POST['active']."', 
		NOW()
	)");

	if($create_article_status) {

		switch ($_FILES["article_preview"]["type"]) {
			case 'image/jpeg':
				$ext = ".jpg";
				break;
			case 'image/png':
				$ext = ".png";
				break;
		}
		echo move_uploaded_file($_FILES["article_preview"]["tmp_name"], $_SERVER["DOCUMENT_ROOT"]."/static/images/upload/blog/".$sqlConnect->insert_id.$ext) ? "Статья создана" : "Ошибка создания статьи";
	}
}
?>
</pre>

</body>
</html>