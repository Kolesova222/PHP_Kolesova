<?php
include ("checks.php");
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к БД";
}

$date_buy = $_GET['date_buy'];
$date_ex = $_GET['date_ex'];
$id_operation = $_GET['id_operation'];
$id_digital = $_GET['id_digital'];
$price = $_GET['price'];
$key_os = $_GET['key_os'];

// Выполнение запроса
$result = $mysqli->query("INSERT INTO dkey
        SET date_buy='$date_buy', date_ex='$date_ex',
        id_operation='$id_operation', id_digital='$id_digital',
        price='$price', key_os ='$key_os'"
);

if ($result) {
    print "<p>Внесение данных прошло успешно!";
    if ($_SESSION['type'] == 1)
        echo "<p><a href=key.php> Вернуться к списку </a>";
    elseif ($_SESSION['type'] == 2)
        echo ".<p><a href=keyAdm.php> Вернуться к списку </a>";
} else {
    if ($_SESSION['type'] == 1)
        echo "Ошибка сохранения . <p><a href=key.php> Вернуться к списку </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Ошибка сохранения . <p><a href=keyAdm.php> Вернуться к списку </a>";
}
mysqli_close($mysqli);
?>