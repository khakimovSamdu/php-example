<?php
function Fact($n){
    $p = 1;
    $k = 1;
    while($n>0){
        $p *= $n;
        $n = $n -1 ;
    }
    while($p> 0){
        $k = $k * $p;
        $p -= 1;
    }
    return $k;
}
echo Fact($_GET['n'])."<br>";
echo Fact($_GET['m'])."<br>";
echo Fact($_GET['k'])."<br>";
?>