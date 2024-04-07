<?php
$k1 = $_GET['k1'];
$k2 = $_GET['k2'];
switch ($k1) {
    case 0: echo 'o\'nga burlish'; break;
    case 1: echo 'chapga burilish'; break;
    case 2: echo 'ortga burilish'; break;
    default: echo 'Komanda mavjud emas'; break;
}
switch ($k2) {
    case 0: echo '<br>keyin o\'nga burlish'; break;
    case 1: echo '<br>keyin chapga burilish'; break;
    case 2: echo '<br>keyin ortga burilish'; break;
    default: echo '<br>Komanda mavjud emas'; break;
}
?>