<?php
$x1 = $_GET['x1'];
$y1 = $_GET['y1'];
$x2 = $_GET['x2'];
$y2 = $_GET['y2'];
$x3 = $_GET['x3'];
$y3 = $_GET['y3'];
$x = $x3 + $x1 - $x2;
$y = $y3 + $y1 - $y2;
echo "(".$x.";".$y.")";

?>