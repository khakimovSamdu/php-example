<?php 
$n = $_GET['n'];
if ($n > 0 and $n %2 == 0){
    echo "Musbat juft son";
}else if($n > 0 and $n %2 == 1){
    echo "Musbat toq son";
}else if ($n < 0 and $n %2 == 0){
    echo "Manfiy juft son";
}else if($n < 0 and $n %2 == 1){
    echo "Manfiy toq son";
}else {
    echo "Nol ga teng";
}
?>