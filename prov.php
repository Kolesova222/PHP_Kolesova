<?php
$k=0;
$exA=array_unique (preg_split('//', $_POST['a'], -1, PREG_SPLIT_NO_EMPTY));
$exB=array_unique (preg_split('//', $_POST['b'], -1, PREG_SPLIT_NO_EMPTY));
for ($i = 0; $i <= array_pop( array_keys($exA)); $i++) {
    for ($j = 0; $j <= array_pop( array_keys($exB)); $j++) {
        if($exB[$j] == $exA[$i]){
            $k++;
        }
    }
}
if($k >= (count($exB))){
    $o='Можно';
    }   else {
        $o='Нельзя';
    }
$output ="
    <html>
    <head>
    <title>Проверка</title>
    </head>
    <body>
    Из букв, входящих в слово А, составить слово В - $o <br />
    <ul>";
    echo $output;
?>