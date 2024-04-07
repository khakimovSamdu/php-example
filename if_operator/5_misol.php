<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$arr = array($a, $b, $c);
$c = 0;
$s = 0;
for ($i = 0; $i < count($arr); $i++) {
    if($arr[$i] > 0){
        $c += 1;
    }else if($arr[$i] < 0){
        $s += 1;
    }
}
echo "Musbat soni: ".$c."<br>Manfiy soni: ".$s;
?>