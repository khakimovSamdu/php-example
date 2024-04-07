<?php
$n = $_GET['n'];
$m = $_GET['m'];
switch ($n) {
    case 1:echo'g\'isht'; break;
    case 2:echo 'olma'; break;
    case 3:echo 'chillak';  break;
    case 4:echo 'qarg\'a';  break;
    default:echo 'Karta yo\'q'; break;
}
echo '<br>';
switch ($m) {
    case 11:echo 'valet'; break;    
    case 12:echo 'dama';    break;
    case 13:echo 'qirol';   break;
    case 14:echo 'tuz'; break;
    default:echo 'Karta yo\'q'; break;
} 
?>