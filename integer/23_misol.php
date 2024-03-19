<?php
$n = $_GET['n'];
$soat = (int)($n/3600);
$min = (int)($n%3600/60);
$sec = $n%3600%60;
echo "Soat : ".$soat."<br>"."Minut : ".$min."<br>"."Second : ".$sec;
?>