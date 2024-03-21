<?php
$arr = ['nok', 'olma', 'shaftoli', 'behi', 'anor', 'banan', 'gilos', 'kivi', 'qulupinay', 'olcha'];
$brr = [12, 14, 13, 21, 23, 31, 24, 26, 28, 30];
for($i = 0; $i<count($arr); $i++){
    $crr = array($arr[$i]=>$brr[$i]);
    foreach($crr as $key=>$value){
        echo $key." => ".$value."<br>";
    }
}

?>