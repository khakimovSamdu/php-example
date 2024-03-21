<?php 
$yil = $_GET['yil'];
$kab1 = (int)($yil/4);
$kab2 = (int)($yil/100);
$kab3 = (int)($yil/400);
echo $kab1 + $kab3 - $kab2;
?>
