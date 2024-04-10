<?php
$x = $_GET['x'];
$y = $_GET['y'];

$x1 = $_GET['x'];
$y1 = $_GET['y'];

$x2 = $_GET['x'];
$y2 = $_GET['y'];

$z = ($x1<$x and $y==$y1) or ($x==$x1 and $y>$y1);
$d = ($x<$x2 and $y==$y2) or ($x==$x2 and $y2>$y);
if ($z and $d){
    echo "true";
}else{
    echo "false";
}
?>