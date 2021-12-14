<p> Колесова Валерия ПИ-322 </p>
<?php
    $n = 10;
    $treug = array_fill(0, $n, 0);
    $kvd = array_fill(0, $n, 0);
    for($i = 0; $i < $n; $i++) {
        $treug[$i] = ($i+1)*(($i+1) + 1) / 2;
        $kvd[$i] = ($i + 1) * ($i + 1);
    }

    for($i = 0; $i < $n; $i++) echo($treug[$i].' ');
    echo('<br>');
    for($i = 0; $i < $n; $i++) echo($kvd[$i].' ');
    echo('<br>');
    $rez = array_merge($treug, $kvd);
    for($i = 0; $i < count($rez); $i++) echo($rez[$i].' ');
    echo('<br>');

    sort($rez);
    for($i = 0; $i < count($rez); $i++) echo($rez[$i].' ');
    echo('<br>');

    array_shift($rez);
    for($i = 0; $i < count($rez); $i++) echo($rez[$i].' ');
    echo('<br>');

    array_unique($rez);
    for($i = 0; $i < count($rez); $i++) echo($rez[$i].' ');

?>
