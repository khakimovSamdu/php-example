<?php
$x = $_GET['x'];
$y = $_GET['y'];
$z = $x<0 and $y<0;
$d = $x>0 and $y<0;

if ($z or $d){
    echo "true";
}else{
    echo "false";
}
?>