<?php
$y = $_GET['y'];
$k = $_GET['k'];
switch ($k) {
case 0: echo $y.' yo\'nalish bo\'yicha harakatni davom ettir'; break;
case 1: echo $y.' yo\'nalish bo\'yicha chap tomonga buril'; break;
case 2: echo $y.' yo\'nalish bo\'yicha o\'ng tomonga buril'; break;
default: echo 'Komanda mavjud emas'; break;
}
?>