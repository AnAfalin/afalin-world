<?
require_once($_SERVER["DOCUMENT_ROOT"]."/core/config.php");

// MySQL. Подключение к БД
$sqlConnect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//Кодировка подключения
mysqli_set_charset($sqlConnect, 'utf8'); //Второй вариант

function mQuery($query) {
    global $sqlConnect;
    return mysqli_query($sqlConnect, $query);


}

function select($query, $type = "rows") {
	global $sqlConnect;
	if($sqlResult = mysqli_query($sqlConnect, $query)) {
		while($row = mysqli_fetch_assoc($sqlResult)) {
			switch ($type) {
				case 'row':
					$result = $row;
					break;
				case 'rows':
					$result[] = $row;
					break;
			}
			
		}
	}
	return $result;
}
?>