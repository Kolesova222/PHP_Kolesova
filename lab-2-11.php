<?php
$n1 = 220;
$n2 = 284;
print ('N =' . $n1 . "<br>");
print ('M =' . $n2 . "<br>");
echo areFriendly($n1,$n2) ? 'true': 'false';

function areFriendly($num1,$num2) {
    $num1divs = sumDiv($num1);
	$num2divs = sumDiv($num2);
    
	return ($num1divs == $num2divs);
}
function sumDiv($num) {
$sum = 1;
for ($i = 2; $i <= $num; $i++) {
if ($num % $i == 0){
$sum += $i;
}
}
return $sum;
}
?>
