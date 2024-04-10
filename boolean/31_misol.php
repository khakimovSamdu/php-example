<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = ($a==$b and $b!=$c) or ($a==$c and $b!=$a) or ($b==$c and $a!=$c);
if($d){
    echo "true";
}else{
    echo "false";
}
?>