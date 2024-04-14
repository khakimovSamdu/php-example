<?php
function IsPalindrom(int $n){
    $a = $n;
    $s = 0;
    while(floor($a)){
        $d = $a%10;
        $s = $s*10 + $d;
        $a = $a/10;
    }
    if ($s == $n){
        return "true";
    }else{
        return "false";
    }
}
echo IsPalindrom($_GET['n'])."<br>";
function ispalindrome(int $m){
    $s = (string) $m;
    if(strrev($s) == $s){
        return "true";
    }else{
        return "false";
    }
}
echo ispalindrome($_GET['m']);
?>