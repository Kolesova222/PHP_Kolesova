<html>
<head><title> Сведения о магазинах </title></head>
<body>
<h2>Сведения о магазинах:</h2>
<table border="1">
    <tr>
        <th>id магазина</th>
        <th>название</th>
        <th>url</th>
        <th>Редактировать</th>
        <th>Уничтожить</th>
    </tr>
</tr>
<?php
require_once 'connect1.php';
$link = mysqli_connect($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу" . mysqli_error($link));
$result = mysqli_query($link, "SELECT id_digital, name_ds, url FROM digital"); // запрос на выборку сведений о пользователях
mysqli_select_db($link, "digital");

while ($row = mysqli_fetch_array($result)) {// для каждой строки из запроса
    echo "<tr>";
    echo "<td>" . $row['id_digital'] . "</td>";
    echo "<td>" . $row['name_ds'] . "</td>";
    echo "<td>" . $row['url'] . "</td>";
    echo "<td><a href='edit_store.php?id_digital=" . $row['id_digital']
        . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
    echo "<td><a href='delete_store.php?id_digital=" . $row['id_digital']
        . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
    echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего магазинов: $num_rows </p>");
?>
<p><a href="new_store.php"> Добавить магазин </a>
<p><a href="index.php"> Вернуться назад </a>
</body>
</html>