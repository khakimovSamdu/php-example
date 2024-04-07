<?php
$r = $_GET['R'];
$n = $_GET['n'];
switch ($n) {
    case 1: echo $r; break;
    case 2: echo "D = ".(2*$r);break;
    case 3: echo "L = ".(2*3.14*$r); break;
    case 4: echo "S = ".($r*$r*3.14);break;
    default : echo "Komanda xato(1:4)"; break;
}
?>