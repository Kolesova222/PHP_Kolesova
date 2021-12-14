<p> Колесова Валерия ПИ-322 </p>
<?php
    $var = random_int(3, 20);
    $m = array_fill(0, $var, random_int(1, 10));
    for($i = 0; $i < $var; $i++) $m[$i] = random_int(1, 51);

    echo('<br>Массив из '.$var.' элементов, заполненный случайными числами:</br>');
    for($i = 0; $i < $var; $i++) echo($m[$i].' ');
	echo('<br>');
	
    echo('<br>Массив в отсортированном виде:</br>');
    sort($m);
    for($i = 0; $i < count($m); $i++) echo($m[$i].' ');
	echo('<br>');
	
    echo('<br>Элементы массива в обратном порядке:</br>');
    $m = array_reverse($m);
    for($i = 0; $i < count($m); $i++) echo($m[$i].' ');
	echo('<br>');
	
    echo('<br>Массив после удаления последнего элемента:</br>');
    array_pop($m);
    for($i = 0; $i < count($m); $i++) echo($m[$i].' ');
	echo('<br>');
		
    $s = 0;
    for($i = 0; $i < count($m); $i++) $s += $m[$i];
	
    echo('<br>Сумма элементов массива: '.$s.'</br>');
	
	echo('<br>Количество элементов в массиве: '.count($m).'</br>');
	echo('<br>');
	
	echo('Среднее арифметическое для элементов массива: '.$s / count($m));
    echo('<br>');
	
	echo('<br>Число 50 присутствует в массиве:</br>');
	if (in_array(50, $m)) echo('Да');
	else echo('Нет');

	echo('<br>');
	echo('<br>Массив из уникальных числел:</br>');
	array_unique($m);
	for($i = 0; $i < count($m); $i++) echo($m[$i].' ');
?>

