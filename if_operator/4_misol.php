<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$arr = array($a, $b, $c);
$c = 0;
for ($i = 0; $i < count($arr); $i++) {
    if($arr[$i] > 0){
        $c += 1;
    }
}
echo $c;
?>