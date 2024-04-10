<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $a==$b and $b==$c;
if($d){
    echo "true";
}else{
    echo "false";
}
?>