<?php
$v = $_GET['v'];
$u = $_GET['u'];
$t1 = $_GET['t1'];
$t2 = $_GET['t2'];
echo 'S = '. ('('.$_GET['v'].'+'.$_GET['u'].')*'.$_GET['t1'] .'+'. '('.$_GET['v'].'-'.$_GET['u'].')'.'*'.$_GET['t2']). ' = '.(($v+$u)*$t1 + ($v-$u)*$t2);
?>