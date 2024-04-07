<?php
$n = (int)($_GET['n']);

function raqam(int $c){
    switch ($c) {
        case 1: echo 'bir';break;
        case 2:echo 'ikki'; break;
        case 3:echo'uch';   break;
        case 4:echo'to\'rt';break;
        case 5:echo'besh';  break;
        case 6:echo  'olti';  break;
        case 7:echo 'yeti';break;
        case 8:echo'sakkiz';break;
        case 9:echo 'to\'qqiz';break ;
        case 100: echo 'yuz'; break;
    }
}
function onlik(int $c){
    switch ($c*10) {
        case 10:echo 'o\'n';break;
        case 20:echo 'yigirma';break;
        case 30:echo 'o\'ttiz';break;
        case 40:echo 'qirq';break;
        case 50:echo 'ellik';break;
        case 60:echo 'oltmish';break;
        case 70:echo 'yetmish';break;
        case 80:echo 'sakson';break ;
        case 90: echo 'to\'qson';break;
    }
}
if ($n==100) {
    echo raqam($n);
}else if ($n%100==0){
    echo raqam($n/100);
}else{
    echo raqam($n/100).' yuz ';
    echo onlik($n%100/10).' ';
    echo raqam($n%10).'<br>';

}
?>