<?php
$x = $_GET['x'];
$y = $_GET['y'];

$x1 = $_GET['x'];
$y1 = $_GET['y'];
$z = ($x+$y==$x1+$y1);
if($z){
    echo 'true';
} else{
    echo 'false';
}
?>