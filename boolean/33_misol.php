<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $a+$b>$c and $b+$c>$a and $c+$a>$b;
if($d){
    echo "true";
}else{
    echo "false";
}
?>