<?php
function PrevDate($d, $m, $y){
    $date = date_create("$d-$m-$y");
    $times_tap = date_timestamp_get($date) - 24*3600;
    date_timestamp_set($date, $times_tap);
    $date_for = date_format($date,"d-m-Y");
    return $date_for;
}
echo PrevDate(1, 6, 2024);
?>