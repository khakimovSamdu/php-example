<?php
function Power($x, $a, $n){
    $s = 0;
    for($i=1; $i<=$n; $i++){
        $p1 = 1;
        for($j= 1; $j<=$i; $j++){
            $p1 *= ($a-$j+1);
        }
        $p2 = 1;
        for ($k=1; $k<=$n; $k++){
            $p2 *= $k;
        }
        $s += $p1*pow($x, $i)/$p2;
    }
    return $s;
}
echo Power($_GET['x'],$_GET['a'], $_GET['n']);

?>