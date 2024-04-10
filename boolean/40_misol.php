<?php
$x = $_GET['x'];
$y = $_GET['y'];

$x1 = $_GET['x'];
$y1 = $_GET['y'];
$z = ($x + $y)%2==1 and (($y1%2==0 and $x1%2==1 and abs(($x+$y)-($x1+$y1))==4)or((($y%2==0 and $x%2==1)or($y%2==1 and $x%2==0)) and abs(($x+$y)-($x1+$y1))==2));
$d = ($x + $y)%2==0 and (((($y1%2==0 and $x1%2==0)or($y1%2==1 and $x1%2==1)) and abs(($x+$y)-($x1+$y1))==4)or((($y%2==1 and $x%2==1)or($y%2==0 and $x%2==0)) and abs(($x+$y)-($x1+$y1))==2));
if($z or $d){
    echo 'true';
} else{
    echo 'false';
}
?>