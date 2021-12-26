<html>
<head><title> Сведения об ОС </title></head>
<body>
<h2>Сведения об ОС:</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th> Тип оборудования</th>
        <th> Разрядность</th>
        <th> Разработчик</th>
        <th> Количество пользователей</th>
        <th> Редактировать</th>
        <th> Уничтожить</th>
    </tr>
    </tr>
    <?php
    require_once 'connect1.php';
    $link = mysqli_connect($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу" . mysqli_error($link));
    $result = mysqli_query($link, "SELECT id_operation, name_os, type_os, x_os, dev_os, count_us
FROM operation"); // запрос на выборку сведений о пользователях
    mysqli_select_db($link, "operation");

    while ($row = mysqli_fetch_array($result)) {// для каждой строки из запроса
        echo "<tr>";
        echo "<td>" . $row['id_operation'] . "</td>";
        echo "<td>" . $row['name_os'] . "</td>";
        echo "<td>" . $row['type_os'] . "</td>";
        echo "<td>" . $row['x_os'] . "</td>";
        echo "<td>" . $row['dev_os'] . "</td>";
        echo "<td>" . $row['count_us'] . "</td>";
        echo "<td><a href='edit_os.php?id_operation=" . $row['id_operation']
            . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
        echo "<td><a href='delete_os.php?id_operation=" . $row['id_operation']
            . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
        echo "</tr>";
    }
    print "</table>";
    $num_rows = mysqli_num_rows($result); // число записей в таблице БД
    print("<P>Всего ОС: $num_rows </p>");
    ?>
    <p><a href="new_os.php"> Добавить ОС </a>
    <p><a href="key.php">Ключи</a>
    <p><a href="stores.php">Магазины</a>
    <p><a href="gen_pdf.php">Скачать pdf-файл</a>
    <p><a href="gen_xls.php">Скачать xls-файл</a>
    <li><a href="../index.php">Главная страница</a></li>
</body>
</html>