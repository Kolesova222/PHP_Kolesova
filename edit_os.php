<html>
<head>
    <title> Редактирование данных об ОС </title>
</head>
<body>
<?php
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
}// установление соединения с сервером
$id_operation = $_GET['id_operation'];

$result = $mysqli->query("SELECT name_os, type_os, x_os, dev_os, count_us
FROM operation WHERE id_operation='$id_operation'");
if ($result) {
    while ($gm = $result->fetch_array()) {
        $name_os = $gm['name_os'];
        $type_os = $gm['type_os'];
        $x_os = $gm['x_os'];
        $dev_os = $gm['dev_os'];
        $count_us = $gm['count_us'];
    }
}

print "<form action='save_edit_os.php' method='get'>";
print "Название: <input name='name_os' size='30' type='text'
value='$name_os'>";
print "<br>Тип оборудования: <input name='type_os' size='30' type='text'
value='$type_os'>";
print "<br>Разрядность: <input name='x_os' size='30' type='int'
value='$x_os'>";
print "<br>Разработчик: <input name='dev_os' size='30' type='text'
value='$dev_os'>";
print "<br>Количество пользователей: <input name='count_us' size='11' type='int'
value='$count_us'>";
print "<input type='hidden' name='id_operation' size='11' type='int'
value='$id_operation'>";
print "<input type='submit' name='save' value='Сохранить'>";
print "</form>";
print "<p><a href='index.php'> Вернуться к списку игр </a>";
?>
</body>
</html>