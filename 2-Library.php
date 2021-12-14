
<?php
$arr=array();
$temp_arr=array();
$r=rand(1,6);
function Zad () {
echo "Задание: В матрице Z(n,n) каждый элемент столбца разделить на диагональный, <br/>";
echo "стоящий в том же столбце. Исходный и скорректированный массивы вывести на экран.<br/>";
echo "<br/>";
}
function Mas() {
global $arr;
global $temp_arr;
global $r;
for($i = 0; $i < $r; $i++) {
for($j = 0; $j < $r; $j++){
$l=rand(1,4);
array_push($temp_arr, $i + $l);
}
array_push( $arr, $temp_arr);
$temp_arr = [];
}
}
function Viv(){
global $arr;
echo "Исходная матрица:<br/>";
foreach($arr as $items) {
foreach($items as $item) {
echo $item.'|';
}
echo "<br>";
}
echo "<br>";
}
function Obr(){
global $arr;
global $r;
for($q = 0; $q < $r; $q++) {
for($w = 0; $w < $r; $w++){
if ($w<$q){
$arr[$q][$w]=round($arr[$q][$w]/$arr[$w][$w],1);
}elseif ($w>$q){
$arr[$q][$w]=round($arr[$q][$w]/$arr[$w][$w],1);
} else {
$arr[$q][$w]=$arr[$q][$w];
}
}
}
for($m = 0; $m < $r; $m++) {
for($n = 0; $n < $r; $n++){
if ($m==$n){
$arr[$m][$n]=$arr[$m][$n]/$arr[$m][$n];
}
}
}
echo "Скорректированная матрица:<br/>";
foreach($arr as $items) {
foreach($items as $item) {
echo $item.'|';
}
echo "<br>";
}
}
?>