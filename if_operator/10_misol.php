<?php
$a = $_GET['a'];
$b = $_GET['b'];
if ($a == $b) {
    $a = 0;
    $b = 0;
    echo $a. ' '. $b;
}else{
    $a = $a + $b;
    $b = $a;
    echo $a.' '. $b;
}
?>