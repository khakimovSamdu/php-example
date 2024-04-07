<?php
$x = $_GET['x'];
if ($x > 0){
    echo 2 * sin($x*180/M_PI);
}else{
    echo $x - 6;
}
?>