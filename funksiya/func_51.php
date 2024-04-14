<?php
function IncTime($h, $m, $s, $t){
    $h = $h + (int)($t/3600);
    $m = $m + (int)($t%3600/60);
    $s = $s + (int)($t%3600%60);
    return $h.':'.$m.':'.$s;
}
echo IncTime($_GET['h'], $_GET['m'], $_GET['s'], $_GET['t']);

?>