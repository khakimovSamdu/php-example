<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
if ($a == $b) {
    echo 'Tartib raqam: '.$c;
}else if ($a == $c) {
    echo 'Tartib raqam: '.$b;
}else if ($b == $c) {
    echo 'Tartib raqam: '.$a;
}else{
    echo 'Kamida ikkita qiymat teng bo\'lishi kerak'. $a. ' '. $b. ' '. $c;
    
}
?>