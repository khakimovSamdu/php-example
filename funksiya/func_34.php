<?php
function Fact($n){
    $p = 1;
    while($n>0){
        $p *= $n;
        $n = $n -1 ;
    }
    return $p;
}
echo Fact($_GET['n'])."<br>";
echo Fact($_GET['m'])."<br>";
echo Fact($_GET['k'])."<br>";
?>