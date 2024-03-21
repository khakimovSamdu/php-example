<?php
$x = $_GET['x'];
if ($x > 0){
    echo 2 * sin($x);
}else{
    echo $x - 6;
}
?>