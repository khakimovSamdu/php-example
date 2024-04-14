<?php
function RedTODeg(float $d){
    $r = $d*180/M_PI;
    return $r;
}
echo RedTODeg($_GET['n'])."<br>";
echo RedTODeg($_GET['m'])."<br>";
echo RedTODeg($_GET['k']);
?>