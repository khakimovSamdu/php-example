<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$D = pow($b, 2) - 4*$a*$c>=0;
if($D){
    echo "true";
}else{
    echo "false";
}
?>