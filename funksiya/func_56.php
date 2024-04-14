<?php
function Leng($x1, $y1, $x2, $y2) {
    return sqrt(pow($x2-$x1, 2) + pow($y2-$y1, 2));
}
echo Leng(2, 4, 3, 6);
?>