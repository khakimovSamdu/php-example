<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
if ($a>$b and $a>$c){
    echo 'MAX: '.$a;
}else if ($b>$a and $b>$c){
    echo 'MAX: '.$b;
}else if ($c>$b and $c>$a){
    echo 'MaX: '.$c;
}else{
    echo "Teng hammasi :(".$a." ".$b." ".$c;
}
?>