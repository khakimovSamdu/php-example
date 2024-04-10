<?php
$x = $_GET['x'];
$y = $_GET['y'];

$x1 = $_GET['x'];
$y1 = $_GET['y'];
$z = ($x+$y)%2==0 and (abs(($x1+$y1)-($x+$y))==4 or abs(($x1+$y1)-($x+$y))==2);
$d = ($x+$y)%2==1 and (abs(($x1+$y1)-($x+$y))==3 or abs(($x1+$y1)-($x+$y))==1);

if($z or $d){
    echo 'true';
} else{
    echo 'false';
}
?>