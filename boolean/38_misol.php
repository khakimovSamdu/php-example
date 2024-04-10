<?php
$x = $_GET['x'];
$y = $_GET['y'];

$x1 = $_GET['x'];
$y1 = $_GET['y'];
$z = ($x + $y)%2==1 and (($x1%2==1 and $y1%2==0)or($x1%2==0 and $y1%2==1));
$d = ($x + $y)%2==0 and (($x1%2==1 and $y1%2==1)or($x1%2==0 and $y1%2==0));
if($z or $d){
    echo 'true';
} else{
    echo 'false';
}
?>