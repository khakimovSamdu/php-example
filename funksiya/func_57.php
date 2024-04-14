<?php
function Priem($x1, $y1, $x2, $y2, $x3, $y3){
    $a = sqrt(pow($x2-$x1, 2) + pow($y2-$y1, 2));
    $b = sqrt(pow($x3-$x2, 2) + pow($y3-$y2, 2));
    $c = sqrt(pow($x3-$x1, 2) + pow($y3-$y1, 2));
    return $a + $b + $c;
}
echo Priem(2, 3, 4, 5, 6, 8);
?>