<?php
function Frac1($a, $b){
    $p = $a;
    $q = $b;
    while($a!=$b){
        if($a>$b){
            $a = $a -$b;
        }else{
            $b = $b - $a;
        }
    }
    return $p/$a.'/'.$q/$a;
}
echo Frac1($_GET['a'], $_GET['b']);
?>