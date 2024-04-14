<?php

function MonthDays($m, $yil){
    $days = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    $s = 0;
    for($i=1; $i<=$m; $i++){
        $s += $days[$i-1];
    }
    if ($yil%4  == 0 and $yil%100 !=0){
        $s -= 1;
    }else if ($yil%400== 0){
        $s -= 1;
    }
    return $s;
}
echo MonthDays($_GET['m'], $_GET['yil']);
?>
