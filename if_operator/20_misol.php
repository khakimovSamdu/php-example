<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
if (($a-$b)>($a-$c)){
    echo "a - b". $a - $b;
}else if (($a-$b)<($a-$c)){
    echo "a - c".$a - $c;
}else {
    echo "a-b == a-c";
}
?>