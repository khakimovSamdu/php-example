<?php
$a = $_GET[ "a"];
$b = $_GET["b"];
if($a > $b){
    $d = $a;
    $a = $b;
    $b = $d;
}
echo "A = ".$a."<br>B = ".$b;
?>