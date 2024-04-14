<?php
function Arctg($x, $n){
    $s = 0;
    for ((int)$i=0; $i<=$n; $i++){
        
        $s += pow($x, 2*$i+1)*pow(-1,$i)/(2*$i+1);
    }
    return $s;
}
echo Arctg($_GET['x'], $_GET['n']);
?>