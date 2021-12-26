<?php
require_once 'connect1.php';
$link = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysql_connect_error());
    exit();
} // установление соединения с сервером и подключение к базе данных:
// Строка запроса на добавление записи в таблицу:
mysqli_query($link, "INSERT INTO operation SET name_os='" . $_GET['name_os']
    . "', type_os='" . $_GET['type_os'] . "', x_os='"
    . $_GET['x_os'] . "', dev_os='" . $_GET['dev_os'] .
    "', count_us='" . $_GET['count_us'] . "'");
if (mysqli_affected_rows($link) > 0) // если нет ошибок при выполнении запроса
{
    print "<p>Спасибо, Ваша ОС добавлена в базу данных.";
    print "<p><a href=\"index.php\"> Вернуться к списку ОС </a>";
} else {
    print "Ошибка сохранения. <a href=\"index.php\"> Вернуться к списку ОС </a>";
    mysqli_close($link);
}
?>
