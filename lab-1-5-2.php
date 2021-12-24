<p> Колесова Валерия 
</p>
<?php
 $n = rand(0,500);

{
   for ($i=1; $i*$i <= $n; $i++)
   
    for ($k=1; $k*$k <= $n; $k++)
	 
	  if ($i*$i + $k*$k ==$n)
	  
	  {
	  
	  echo $i , "^2 + ",
	   
	    $k , "^2 =" ,
		 ($i*$i+$k*$k), " можно представить";
		 
		 return true;
	}
echo ($n . "\n". "невозможно представить");

      return false;
	}
?>