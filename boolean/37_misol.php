<?php
$x = $_GET['x'];
$y = $_GET['y'];

$x1 = $_GET['x'];
$y1 = $_GET['y'];
$z = ($x+$y)%2==0 and (abs(($x+$y)-($x1-$y1)==1) or ($x+$y)==($x1+$y1) or (($x1%2==1 and $y%2== 1)or($x1%2==0 and $y%2== 0) and abs(($x+$y)-($x1+$y1)==2)));
$d = ($x+$y)%2==1 and (abs(($x+$y)-($x1-$y1)==1) or ($x+$y)==($x1+$y1) or (($x1%2==1 and $y%2== 0)or($x1%2==0 and $y%2== 1) and abs(($x+$y)-($x1+$y1)==2)));

if($z or $d){
    echo 'true';
} else{
    echo 'false';
}
?>