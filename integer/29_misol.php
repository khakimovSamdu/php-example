<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$n1 = (int)($a/$c);
$n2 = (int)($b/$c);
echo "Kvadratlar soni : ". $n1*$n2."<br>";
echo "Qolgan yuza : ".($a*$b - $n1*$n2*$c*$c);


?>