<?php
$x = $_GET['x'];
if ($x < 0){
    echo 0;
}else if($x%2 == 0){
    echo 1;
}else if ($x%2 == 1){
    echo -1;
}
?>