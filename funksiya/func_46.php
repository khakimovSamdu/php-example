<?php
function EKUB($a, $b){
    while($a!=$b){
        if($a>$b){
            $a = $a -$b;
        }else{
            $b = $b - $a;
        }
    }
    return $a;
}
echo EKUB($_GET['a'], $_GET['b']);
?>