<p> Колесова Валерия Вариант 7
</p>
<?php
$a = rand(-20,20);
$b = rand(-20,20);
$d = rand(-20,20);
$c = rand(-20,20);
echo '<br> a ='. $a;
echo '<br> b ='. $b;
echo '<br> d ='. $d;
echo '<br> c ='. $c;
echo '<br>';
print ('(42*c - (d/2) + 1)/(a*a - b - 5)' . '=' . (42*$c - ($d/2) + 1)/($a*$a - $b - 5) . '<br>');
?>