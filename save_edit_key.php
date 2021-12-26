<html>
<body>
<?php
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
} // установление соединения с сервером

$id = $_GET['id'];
$date_buy = $_GET['date_buy'];
$date_ex = $_GET['date_ex'];
$id_operation = $_GET['id_operation'];
$id_digital = $_GET['id_digital'];
$price = $_GET['price'];
$key_os = $_GET['key_os'];

$result = $mysqli->query("UPDATE dkey SET date_buy='$date_buy', date_ex='$date_ex' , 
id_operation='$id_operation', id_digital='$id_digital', price='$price', key_os='$key_os'
WHERE id='$id'");


if ($result) {
    echo 'Все сохранено. <a href="key.php"> Вернуться к списку ключей </a>';
} else {
    echo 'Ошибка сохранения. <a href="key.php">Вернуться к списку ключей</a> ';
}
?>
</body>
</html>