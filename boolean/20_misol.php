<?php
$n = $_GET['n'];
bool $a = (int)($n/100)>0;
bool $b = (int)($n/1000)=0;
if ($a and $b){
    echo true;
}else {
    echo false ;
}
?>