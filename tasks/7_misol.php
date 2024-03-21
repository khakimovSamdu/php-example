<?php
$arr = array(
    "nok"=>21,
    "olma"=>15,
    "o'rik"=>10,
    "shaftoli"=>18,
    "anor"=>14,
    "behi"=>11,
    "limon"=>20,
    "banan"=>15,
    "kivi"=>24,
);
asort($arr);
foreach ($arr as $key => $value){
    echo $key ." => ". $value ."<br>";
}

?>