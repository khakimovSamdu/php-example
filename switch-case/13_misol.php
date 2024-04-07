<?php
$n = $_GET['n'];
$a = $_GET['a'];
switch ($n) {
    case 1:  echo $a; break;
    case 2: echo $a*pow(2,0.5); break;
    case 3: echo $a*pow(2,0.5)*2; break;
    case 4: echo $a*$a/2; break;
    default: echo "Komanda yo'q"; break;
}
?>