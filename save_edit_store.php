<html>
<body>
<?php
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
} // установление соединения с сервером


$id_digital = $_GET['id_digital'];
$name_ds = $_GET['name_ds'];
$url = $_GET['url'];

$zapros = "UPDATE digital SET name_ds='$name_ds', url='$url' 
WHERE id_digital='$id_digital'";

$result = $mysqli->query($zapros);

if ($result) {
    echo 'Все сохранено. <a href="stores.php"> Вернуться к списку магазинов </a>';
} else {
    echo 'Ошибка сохранения. <a href="stores.php">Вернуться к списку магазинов</a> ';
}
?>
</body>
</html>