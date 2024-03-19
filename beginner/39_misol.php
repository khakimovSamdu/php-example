<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $b^2 + 4*$a*$c;
if ($d>0 and $a!=0){
    $x1 = -$b + sqrt($d);
    $x2 = -$b - sqrt($d);
    echo 'x1 = '.$x1.'<br>'.'x2 = '.$x2;
}else{
    echo "Qiymatlar xato kiritildi yoki diskiriminant musbat bo'lishi kekrak";
}
?>