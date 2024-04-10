<?php
$n = $_GET['n'];
$a = (int)($n/100)>0;
$b = (int)($n/1000)==0;
$n1 = (int)($n/100)==(int)($n%10);
if ($a and $b and $n1) {
    echo "true";
}else {
    echo "false" ;
}
?>