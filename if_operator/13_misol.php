<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
if ($a>$b and $b<$c){
    echo $b;
}else if( $a>$c and $c<$b){
    echo $c;
}else if( $c>$a and $a<$b){
    echo $a;
}else{
    print_r("Kiritishda hato bor");
}
?>