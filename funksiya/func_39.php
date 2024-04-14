<?php
function Power3(int $a, int $n){
    return pow($a, $n);
}
echo Power3($_GET['a'], $_GET['b']);
?>