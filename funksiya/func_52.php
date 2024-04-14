<?php

function IsYear($yil){
    if ($yil%4  == 0 and $yil%100 !=0){
        $eco = 'Kabissa yili : '.$yil."<br>";
    }else if ($yil%400== 0){
        $eco = 'Kabissa yili : '.$yil."<br>";
    }else {
        $eco = 'Kabisa yili emas: '.$yil."<br>";
    }
    return $eco;
}
$yil = $_GET['yil'];
echo IsYear($yil);
?>
