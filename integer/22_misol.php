<?php
$n = $_GET['n'];
$soat = (int)($n/3600);
$sec = $n%3600;
echo "Soat : ".$soat."<br>"."Second : ".$sec;
?>