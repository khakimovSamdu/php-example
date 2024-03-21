<?php
$x = $_GET['x'];
$y = $_GET['y'];
if ($x>0 and $y>0){
    echo "I chorak";
}else if($x < 0 and $y > 0){
    echo "II chorak";
}else if($x < 0 and $y < 0){
    echo "III chorak";
}else if($x > 0 and $y < 0){
    echo "IV chorak";
}else {
    echo "x yoki y ning qiymati nolga teng bo'lmasligi kerak";
}
?>