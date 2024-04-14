<?php
function EKUB3($a, $b, $d){
    while($a!=$b and $b!=$d and $a!=$d){
        if($a>$b){
            $a -= $b;
        }else if($b>$d){
            $b -= $d;
        }else if($b<$d){
            $d -= $b;
        }else if($a<$b){
            $b -= $a;
        }else if($a>$d){
            $a -= $d;
        }else if($a<$d){
            $d -= $a;
        }
    }
    return $a;
}
echo EKUB3($_GET['a'], $_GET['b'], $_GET['d']);

?>