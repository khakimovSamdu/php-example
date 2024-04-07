<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$arr = array($a,$b, $c);
sort($arr);
echo $arr[1]." ".$arr[2];
?>