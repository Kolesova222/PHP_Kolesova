<HTML>
<TITLE> Таблица умножения №2 </TITLE>
<BODY>
<TABLE border=1>
<?php
echo ("<table border='1'>");
for($i=0; $i < 10; $i++) {
echo("<tr>");
for($p=0; $p < 10; $p++) {
if (($i*10+$p+1) % 2 == 0)
echo ("<td style='color: red;'>". ($i*10+$p+1) ."</td>");
else
echo ("<td>". ($i*10+$p+1) ."</td>");
}
echo("</tr>");
}
echo ("</table>");
?>
</TABLE>
</BODY>
</HTML>