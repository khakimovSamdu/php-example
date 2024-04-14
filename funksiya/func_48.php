<?php
function EKUK($a, $b){
    $p = $a;
    $q = $b;
    while($a!=$b){
        if($a>$b){
            $a = $a -$b;
        }else{
            $b = $b - $a;
        }
    }
    return ($p*$q)/$a;
}
echo EKUK($_GET['a'], $_GET['b']);
?>