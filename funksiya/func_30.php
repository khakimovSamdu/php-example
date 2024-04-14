<?php
function DigitN($k, $v) {
    $a = (string) $k;
    if(strlen($a) > $v) {
        return $a[$v];
    }else{
        return -1;
    }
}
echo DigitN(123, 2);
?>