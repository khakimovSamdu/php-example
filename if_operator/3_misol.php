<?php
$a = $_GET['a'];
if($a > 0){
    echo $a + 1;
}else if($a < 0){
    echo $a - 2;
}else{
    $a = 10;
    echo $a;
}
?>