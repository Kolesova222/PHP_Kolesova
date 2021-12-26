<html>
<head><title> Сведения о ключах </title></head>
<body>
<h2>Сведения о ключах:</h2>
<table border="1">
    <tr>
        <th>ID ключа</th>
        <th>дата приобретения</th>
        <th> дата окончания</th>
        <th> ОС</th>
        <th> магазин</th>
        <th> стоимость</th>
        <th> ключ</th>
        <th> Редактировать</th>
        <th> Уничтожить</th>
    </tr>
    </tr>
    <?php
    require_once 'connect1.php';
    $mysqli = new mysqli($host, $user, $password, $database);
    if ($mysqli->connect_errno) {
        echo "Невозможно подключиться к серверу";
    }
    $result = $mysqli->query("SELECT dkey.id, dkey.date_buy, dkey.date_ex, operation.name_os as operation, digital.name_ds as digital, dkey.price, dkey.key_os
FROM dkey 
LEFT JOIN operation ON dkey.id_operation=operation.id_operation
LEFT JOIN digital ON dkey.id_digital=digital.id_digital"); // запрос на выборку сведений о пользователях

    $counter = 0;
    if ($result) {
        while ($row = $result->fetch_array()) {// для каждой строки из запроса
            $id = $row['id'];
            $date_buy = $row['date_buy'];
            $date_ex = $row['date_ex'];
            $operation = $row['operation'];
            $digital = $row['digital'];
            $price = $row['price'];
            $key_os = $row['key_os'];

            $date_buy = date('d-m-Y', strtotime($date_buy));
            $date_ex = date('d-m-Y', strtotime($date_ex));

            echo "<tr>";
            echo "<td>$id</td><td>$date_buy</td><td>$date_ex</td><td>$operation</td><td>$digital</td><td>$price</td><td>$key_os</td>";

            echo "<td><a href='edit_key.php?id=" . $row['id']
                . "'>Редактировать</a></td>"; //Запуск редактирования
            echo "<td><a href='delete_key.php?id=" . $row['id']
                . "'>Удалить</a></td>"; //запуск удаления
            echo "</tr>";
            $counter++;
        }
    }
    print "</table>";
    print("<p>Всего ОС: $counter </p>");
    ?>
    <p><a href="new_key.php"> Добавить ключ </a>
    <p><a href="index.php"> Вернуться назад </a>
</body>
</html>
