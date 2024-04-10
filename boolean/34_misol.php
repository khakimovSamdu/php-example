<?php
$x = $_GET['x'];
$y = $_GET['y'];
$z = ($x%2==1 and $y%2==0) or ($x%2==0 and $y%2==1);
if($z){
    echo 'true';
} else{
    echo 'false';
}
?>