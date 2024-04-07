<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
if($a<$b and $b<$c){
    echo 'a= '.(2*$a).' b = '.(2*$b).' c = '.(2*$c);
}else{
    echo 'a= '.(-1*$a).' b = '.(-1*$b).' c = '.(-1*$c); 
}
?>