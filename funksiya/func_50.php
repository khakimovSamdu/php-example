<?php
function TimeTOHMS($t){
    $s1 = '';
    $s2 = '';
    $s3 = '';
    if((int)($t/3600)<=9){
        $s1 = '0';
    }
    if((int)($t%3600/60)<=9){
        $s2 = '0';
    }
    if ((int)($t%3600%60)<=9){
        $s3 = '0';
    }
    return $s1.(int)($t/3600).':'.$s2.(int)($t%3600/60).':'.$s3.(int)($t%3600%60);
}
echo TimeTOHMS($_GET['T']);
?>