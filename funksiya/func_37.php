<?php
function Power1(int $a, int $b){
    return pow($a, $b);
}
echo Power1($_GET['a1'],$_GET['b']).'<br>';
echo Power1($_GET['a2'],$_GET['b']).'<br>';
echo Power1($_GET['a3'],$_GET['b']).'<br>';
?>