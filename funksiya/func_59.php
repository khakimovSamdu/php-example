<?php
function Leng($x1, $y1, $x2, $y2, $xp, $yp) {
    $a = sqrt(pow($x2-$x1, 2) + pow($y2-$y1, 2));
    $b = sqrt(pow($xp-$x2, 2) + pow($yp-$y2, 2));
    $c = sqrt(pow($xp-$x1, 2) + pow($yp-$y1, 2));
    $p = ($a + $b + $c)/2;
    $s = sqrt(($p-$a)*($p-$b)*($p-$c)*$p);
    $d = 2*$s/$a;
    return $d;
}
echo Leng(2, 4, 3, 5, 6, 8);
?>