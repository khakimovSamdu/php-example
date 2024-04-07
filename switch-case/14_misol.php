<?php
$n = $_GET['n'];
$a = $_GET['a'];
switch ($n) {
    case 1:  echo $a; break;
    case 2: echo $a*pow(3,0.5)/6; break;
    case 3: echo $a*pow(3,0.5)/3; break;
    case 4: echo $a*$a*pow(3,0.5)/4; break;
    default: echo "Komanda yo'q"; break;
}
?>