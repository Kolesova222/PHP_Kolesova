<?php
include("checks.php");
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database)
or die ("Невозможно подключиться к серверу");
$id_digital = $_GET['id_digital'];
if ($_SESSION['type'] == 2)
    $result = $mysqli->query("DELETE FROM digital WHERE id_digital='$id_digital'");
else
    echo "Недостаточно прав";
header("Location: storesAdm.php");
exit;
?>
