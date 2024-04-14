<?php
function sin1($x, $n){
    $s = 0;
    for ((int)$i=0; $i<=$n; $i++){
        $fak = 1;
        for($j=1; $j<=2*$i+1; $j++){
            $fak*=$j;
        }
        $s += pow($x, 2*$i+1)*pow(-1,$i)/$fak;
    }
    return $s;
}
echo sin1($_GET['x'], $_GET['n']);
?>