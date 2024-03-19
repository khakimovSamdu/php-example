<?php
$n = $_GET['n'];
$min = (int)($n/60);
$sec = $n%60;
echo "Minut : ".$min."<br>"."Second : ".$sec;
?>