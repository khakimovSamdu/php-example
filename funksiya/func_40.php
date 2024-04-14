<?php
function Exp1(int $x, int $n){
    
    $s = 0;
    for((int) $i=1; $i<=$n; $i++){
        $p = 1;
        for((int) $j=1; $j<=$i; $j++){
            $p = $p*$j;
        }
        $s += pow($x, $i)/($i*$p);
    }
    return $s+1;
}
echo Exp1($_GET['x'], $_GET['n']);
?>