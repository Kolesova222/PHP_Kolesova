<p> Колесова Валерия ПИ-322 </p>
<?php
    $m=array(2,6,4,3,1);
	$k=count($m);
	print_r($m);
	echo "<-Основной массив<br />";
	for ($i=$k-1;$i;--$i){
	$m[$i]=array_sum(array_slice($m,0,$i));
	if($i!=1){
	print_r($m);
	echo '<br />';
	}else{
	print_r($m);
	echo "<-Конечный результат";
	}
	}    
?>