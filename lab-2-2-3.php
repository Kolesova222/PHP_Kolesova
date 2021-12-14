<p> Колесова Валерия ПИ-322 </p>
<?php
    $cust = array('cnum' => 2001, 'cname' => 'Hoffman', 'city' => 'London', 'snum' => 1001);
    print_r($cust);
    echo('<br>');

    $cust['rating'] = 100;
    print_r($cust);
    echo('<br>');

    asort($cust);
    print_r($cust);
    echo('<br>');

    ksort($cust);
    print_r($cust);
    echo('<br>');

    sort($cust);
    print_r($cust);
?>