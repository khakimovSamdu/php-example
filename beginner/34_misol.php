<?php
#34 - misol
$x = $_GET['x'];
$a = $_GET['a'];
$y = $_GET['y'];
$b = $_GET['b'];
$xa = $x*$a;
$yb = $y*$b;
echo 'Shokolad = '. $xa.'<br>';
echo 'Konfet = ' .$yb.'<br>';
echo 'Farqi = ' .($xa - $yb);

?>