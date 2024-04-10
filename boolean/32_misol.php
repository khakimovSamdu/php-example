<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = pow($a, 2) + pow($b, 2) == pow($c, 2);
if($d){
    echo "true";
}else{
    echo "false";
}
?>