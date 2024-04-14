<?php
function Power2(int $a, int $n){
    $arr = [];
    for($i = 0; $i < $n; $i++){
        array_push($arr, $i+1);
    }
    (int) $brr = [];
    for($i = 0; $i < $arr; $i++){
        array_push($brr, pow($a, $arr[$i]));
    }
    for ($i = 0; $i < $brr; $i++){
        echo $brr[$i]."<br>";
    }
}

echo Power2($_GET['a'],3);
?>