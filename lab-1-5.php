<p> Колесова Валерия Вариант 11
</p>
<?php
$c = rand(-20, 20);
$d = rand(-20, 20);
$a = rand(-20, 20);
$b = rand(-20, 20);
$y = ((abs($c-($d/2)))*($b-7))/(2*$a-1);
echo ("|".$c."-(".$d."/2)|*(".$b."-7)/(2*".$a."-1) = ".$y);
?>