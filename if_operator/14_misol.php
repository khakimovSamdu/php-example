<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
echo "MIN: ".min($a, min($b, $c)). "MAX: ".max(max($a, $c), $b);
?>