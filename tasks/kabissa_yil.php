<?php
$yil = $_GET['yil'];
if ($yil%4  == 0 and $yil%100 !=0){
    echo 'Kabissa yili : '.$yil."<br>";
}else if ($yil%400== 0){
    echo 'Kabissa yili : '.$yil."<br>";
}else {
    echo 'Kabisa yili emas: '.$yil."<br>";
}
?>
