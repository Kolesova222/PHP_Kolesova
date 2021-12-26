<html>
<head><title> Добавление новой ОС </title></head>
<body>
<H2>Добавление новой ОС:</H2>
<form action="save_new_os.php" method="get">
    Название: <input name="name_os" size="50" type="text">
    <br>Тип оборудования: <input name="type_os" size="50" type="text">
    <br>Разрядность: <input name="x_os" size="3" type="int">
    <br>Разработчик: <input name="dev_os" size="50" type="text">
    <br>Количество пользователей: <input name="count_us" size="11" type="int">
    <p><input name="add" type="submit" value="Добавить">
        <input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
    <a href="index.php"> Вернуться к списку ОС </a>
</body>
</html>
