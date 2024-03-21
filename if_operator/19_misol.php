<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $_GET['d'];
if ($a==$b and $a == $c){
    echo "Tartib raqam: ".$d;
}else if($a==$b and $a==$d){
    echo "Tartib raqam: ".$c;
}else if($b==$a and $b==$c){
    echo "Tartib raqam: ". $d;
}else if ($b==$a and $b==$d){
    echo "Tartib raqam: ". $c;
}else if($c==$a and $c==$b){
    echo "Tartib raqam: ".$d;
}else if($c==$a and $c==$d){
    echo "Tartib raqam: ".$b;
}else if($d==$a and $d==$b){
    echo "Tartib raqam: ".$c;
}else if($d==$a and $d==$c){
    echo "Tartib raqam: ".$b;
}else if($b==$c and $c==$d){
    echo "Tartib raqam: ".$a;
}else{
    echo "Kamida uchta qiymat teng bo'lishi kerak:";
}
?>