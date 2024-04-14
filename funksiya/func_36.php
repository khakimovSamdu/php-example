<?php
function Fib(int $n){
    $f0 = 1;
    $f1 = 1;
    for((int) $i=2; $i<=$n; $i++){
        $F = $f0+$f1;
        $f0 = $f1;
        $f1 = $F;
    }
    return $F;
}
$n = $_GET['n'];
echo Fib($n);

?>