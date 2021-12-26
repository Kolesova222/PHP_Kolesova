<?php
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database)
or die ("Невозможно подключиться к серверу");
$id_ds = $_GET['id_ds'];
$result = $mysqli->query("DELETE FROM digital WHERE id_ds='$id_ds'");
header("Location: stores.php");
exit;
?>
