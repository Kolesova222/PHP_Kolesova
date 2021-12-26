<html>
<head>
    <title> Редактирование данных о ключах </title>
</head>
<body>
<?php
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
}// установление соединения с сервером
$id = $_GET['id'];
$prod = mysqli_query($mysqli, "SELECT
			dkey.id,
			dkey.date_buy,
			dkey.date_ex,
			dkey.price,
			dkey.key_os,

			operation.id_operation as id_operation,
			operation.name_os as name_os,

			digital.id_digital as id_digital,
			digital.name_ds as name_ds

			FROM dkey
			LEFT JOIN operation ON dkey.id_operation=operation.id_operation
			LEFT JOIN digital ON dkey.id_digital=digital.id_digital
			WHERE dkey.id='$id'"
);

if ($prod) {
    $prod = $prod->fetch_array();

    $id = $prod['id'];
    $date_buy = $prod['date_buy'];
    $date_ex = $prod['date_ex'];
    $price = $prod['price'];
    $key_os = $prod['key_os'];

    $id_digital = $prod['id_digital'];
    $name_ds = $prod['name_ds'];

    $id_operation = $prod['id_operation'];
    $name_os = $prod['name_os'];

}


print "<form action='save_edit_key.php' method='get'>";


$result = $mysqli->query("SELECT id_operation, name_os FROM operation WHERE id_operation <> '$id_operation' ");
echo "<br>ОС:<select name='id_operation'>";
echo "<option selected value='$id_operation'>$name_os</option>";
if ($result) {
    while ($row = $result->fetch_array()) {
        $id_operation = $row['id_operation'];
        $name_os = $row['name_os'];
        echo "<option value='$id_operation'>$name_os</option>";

    }
}
echo "</select>";

//работа с магазинами

$result = $mysqli->query("SELECT id_digital, name_ds FROM digital WHERE id_digital <> '$id_digital' ");
echo "<br>Магазин: <select name='id_digital'>";
echo "<option selected value='$id_digital'>$name_ds</option>";

if ($result) {
    while ($row = $result->fetch_array()) {
        $id_digital = $row['id_digital'];
        $name_ds = $row['name_ds'];
        echo "<option value='$id_digital'>$name_ds</option>";
    }
}
echo "</select>";


print "<br> дата приобретения: <input name='date_buy' placeholder='dd-mm-yyyy' type='date' value=$date_buy>";
print "<br> дата окончания: <input name='date_ex' placeholder='dd-mm-yyyy' type='date' value=$date_ex>";
print "<br> стоимость: <input name='price' size='11' type='int' value=$price>";
print "<br> ключ: <input name='key_os' size='11' type='int'value=$key_os>";
print "<input type='hidden' name='id' size='11' value=$id>";
print "<input  name='save' type='submit' value='Сохранить'>";
print "</form>";
print "<p><a href='key.php'> Вернуться к списку ключей </a>";
?>
</body>
</html>