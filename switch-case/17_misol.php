<?php
$n = (int)($_GET['n']);
$a = (int)($n/10);
$b = (int)($n%10);
if ($n < 70){
    if($a!=0 and $a<7){
        switch ($a*10) {
            case 10:echo 'o\'n';break;
            case 20:echo 'yigirma';break;
            case 30:echo 'o\'ttiz';break;
            case 40:echo 'qirq';break;
            case 50:echo 'ellik';break;
            case 60:echo 'oltmish';break;
            default:echo 'Xato son kiritildi';break;
        }
    }

    switch ($b) {
        case 1: echo ' bir';break;
        case 2:echo ' ikki'; break;
        case 3:echo' uch';   break;
        case 4:echo' to\'rt';break;
        case 5:echo' besh';  break;
        case 6:echo  ' olti';  break;
        case 7:echo ' yeti';break;
        case 8:echo' sakkiz';break;
        case 9:echo ' to\'qqiz';break ;
    }
    if($a<=60){
        echo ' ta masala';
    }
}else{
    echo 'Kiritilgan son 70 dan kichik bo\'lsin';
}
?>