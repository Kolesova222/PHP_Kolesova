<html>
    <head>
    <title>Проверка</title>
    </head>
<body>
    Cтолбец список слов, которые входят в данную строчку: <br /> 
   
<?php
print($_POST['a']."<br><br>" );
$exA=preg_split("/[\s.,]+/", $_POST['a'], -1, PREG_SPLIT_NO_EMPTY);
for ($i = 0; $i <= array_pop( array_keys($exA)); $i++) {
        echo $exA[$i] . "<br>";
      }
?>
</body>
</html> 