<?php
function Area($x1, $y1, $x2, $y2, $x3, $y3){
    $a = sqrt(pow($x2-$x1, 2) + pow($y2-$y1, 2));
    $b = sqrt(pow($x3-$x2, 2) + pow($y3-$y2, 2));
    $c = sqrt(pow($x3-$x1, 2) + pow($y3-$y1, 2));
    if ($a + $c> $b and $b +$c>$a and $a+$b>$c){
        $p = ($a + $b + $c)/2;
        $s = sqrt(($p-$a)*($p-$b)*($p-$c)*$p);
        $ha = 2*$s/$a;
        $hb = 2*$s/$b;
        $hc = 2*$s/$c;
        return "h1 = ".$ha."<br>h2 = ".$hb."<br>h3 = ".$hc;
    }else{
        $s = "Uchburchak yasab bo'lmadi";
        return $s;
    }
    
}
echo Area(2, 3, 4, 5, 6, 8);
?>