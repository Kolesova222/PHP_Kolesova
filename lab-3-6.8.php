<h2>Колесова Валерия ПИ-322 Задание 6</h2>
<HTML>
<HEAD> <TITLE> Задание 3.6 Колесова </TITLE>
</HEAD>
<BODY>
<BODY BGCOLOR="#F5F5DC">
<FORM method="post" action="<?php print $PHP_SELF ?>">
Вывести заданный текст, удалив из него повторные вхождения каждого символа.<br>
  Введите предложение: <br>
     <INPUT type="text" name="a" size="50">
<P> <INPUT type="submit" name="obr" value="Удалить повторяющиеся символы">
</FORM>
<?php
$a = ($_POST["a"]);
$a = preg_split("//u",$a);
$b = array();
foreach ($a as $v)
{
	   if (in_array($v, $b))
		   continue;
	   $b[] = $v;
}
$a = implode($b);
echo $a;
?>
</BODY> </HTML>