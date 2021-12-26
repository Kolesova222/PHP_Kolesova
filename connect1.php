<?php
$host = 'localhost';
$database = 'a0613395_operation';
$user = 'a0613395_operation';
$password = 'root';
//require_once 'connect.php';
$link = mysqli_connect($host, $user, $password, $database)
or die("ошибка" . mysqli_error($link));
?>
