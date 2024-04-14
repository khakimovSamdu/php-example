<?php
function cos1($x, $n){
    $s = 0;
    for ((int)$i=0; $i<=$n; $i++){
        $fak = 1;
        if($i!=0){
            for($j=1; $j<=2*$i; $j++){
                $fak*=$j;
            }
        }
        
        $s += pow($x, 2*$i)*pow(-1,$i)/$fak;
    }
    return $s;
}
echo cos1($_GET['x'], $_GET['n']);
?>