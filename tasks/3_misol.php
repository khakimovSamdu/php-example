<?php
$matritsa = array();
for ($i = 1; $i <= 4; $i++) {
    $qator = array();
    for ($j = 1; $j <= 4; $j++){
        $qator[] = $i * 4 + $j;
    }
    $matritsa[] = $qator;
    }

$satr = count($matritsa);
$ustun = count($matritsa);

for ($i = 0; $i < $satr; $i++) {
    for ($j = 0; $j < $ustun; $j++) {
        echo $matritsa[$i][$j] . " ";
    }
    echo "<br>";
    }

?>
