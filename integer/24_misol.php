<?php
$k = $_GET['k'];
$n = ($k%7);
switch ($n) {
    case 0:echo'Yaxshanba';
    break;  
    case 1:echo 'Dushanba';
    break;
    case 2:echo 'Seshanba';
    break;  
    case 3:echo 'Chorshanba';
    break;
    case 4:echo 'Payshanba';
    break;
    case 5:echo 'Juma';
    break;
    case 6:echo 'Shanba';
    break;
}
?>