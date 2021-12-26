<html>
<head><title> Добавление нового ключа </title></head>
<body>
<H2>Добавление нового ключа:</H2>
<form action="save_new_key.php" method="get">
    <?php
    include ("checks.php");
    require_once 'connect1.php';
    $mysqli = new mysqli($host, $user, $password, $database);
    if ($mysqli->connect_errno) {
        echo "Невозможно подключиться к серверу";
    }

    $result = $mysqli->query("SELECT id_operation, name_os FROM operation");
    echo "<br>ОС: <select name='id_operation'>";

    if ($result) {
        while ($row = $result->fetch_array()) {
            $id_operation = $row['id_operation'];
            $name_os = $row['name_os'];
            echo "<option value='$id_operation'>$name_os</option>";
        }
    }
    echo "</select>";
    //id цифрового магазина
    $result = $mysqli->query("SELECT id_digital, name_ds FROM digital");
    echo "<br>Магазин: <select name='id_digital'>";

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
    echo "<p><input name='add' type='submit' value='Добавить'></p>";
    echo "<p><input name='b2' type='reset' value='Очистить'></p>";
    if ($_SESSION['type'] == 1)
        echo "<p><a href=key.php> Вернуться к списку ключей </a></p>";
    elseif ($_SESSION['type'] == 2)
        echo "<p><a href=keyAdm.php> Вернуться к списку ключей </a></p>";
    ?>
</form>
</body>
</html>
