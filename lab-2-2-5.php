<p> Колесова Валерия ПИ-322 </p>
<?php
    function f($u, $t) {
        if ($u > 0 && $t > 0) {
            return $u * $u + $t;
        } else if ($u > 0 && $t > 0) {
            return $u + ($t*$t) ;
        } else if ($u <= 0 && $t <= 0) {
            return $u + $t;
        }
    }

    $a = random_int(-100, 100);
    $b = random_int(-100, 100);
    $z = f($a - $b,(($b * $b) - $a)) + f(($a * $a)* $b,($b * $b));

    echo('a: ' . $a . '<br>');
    echo('b: ' . $b . '<br>');
    echo('z: ' . $z . '<br>');
    
?>