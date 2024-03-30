<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $a;
$d = $b;
while ($a!=$b){
    if ($a>$b){
        $a = $a - $b;
    }
    if ($a<$b){
        $b = $b - $a;
    }
}
echo "EKUB: ".$a."<br>";
echo "EKUK: ".$c*$d/$a."<br>";


?>