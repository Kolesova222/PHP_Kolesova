<?php
include("checks.php");
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу");
$id_operation = $_GET['id_operation'];
if ($_SESSION['type'] == 2)
    $result = $mysqli->query("DELETE FROM operation WHERE id_operation ='$id_operation'");
else
    echo "Недостаточно прав";
header("Location: osAdm.php");
exit;
?>
