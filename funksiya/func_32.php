<?php
function DegToRad(float $d){
    $r = $d*M_PI/180;
    return $r;
}
echo DegToRad($_GET['n'])."<br>";
echo DegToRad($_GET['m'])."<br>";
echo DegToRad($_GET['k']);
?>