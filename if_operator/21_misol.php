<?php
$x = $_GET['x'];
$y = $_GET['y'];
if ($x == 0 and $y == 0){
    echo "Kordinata markazida :". 0;
}else if($x==0 and $y!=0){
    echo "OY kordinata o'qida :". 1;
}else if($x!=0 and $y==0){
    echo "OX kordinata o'qida :". 2;
}else{
    echo "Kordinata o'qida joylashmagan :". 3;
}
?>