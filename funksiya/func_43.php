<?php
function Ln1($x, $n){
    $s = 0;
    for ((int)$i=1; $i<=$n+1; $i++){
        
        $s += pow($x, $i)*pow(-1,$i+1)/$i;
    }
    return $s;
}
echo Ln1($_GET['x'], $_GET['n']);
?>