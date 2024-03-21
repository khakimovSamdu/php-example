<?php
$x = $_GET['x'];
if ($x <= 0){
    echo -$x;
}else if($x> 0 and $x < 2){
    echo pow($x, 2);
}else if ($x>=2){
    echo 4;
}
?>