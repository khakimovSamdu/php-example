<?php
$x = $_GET['x'];
$y = $_GET['y'];
$z = $x<0 and $y>0;
if ($z){
    echo "true";
}else{
    echo "false";
}
?>