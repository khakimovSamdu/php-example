<?php
$d = $_GET['d'];
$m = $_GET['m'];
if($d<=20 and $m>=1 and $m<=2 and $d>=18){
    echo "Qovg\'a";
}else if($d<=20 and $m>=2 and $m<=3 and $d>=19){
    echo "Baliq";
}else if($d<=20 and $m>=3 and $m<=4 and $d>=19){
    echo "Qo\'y";
}else if($d==20 and $m>=4 and $m<=5){
    echo "Buzoq";
}else if($d==21 and $m>=5 and $m<=6){
    echo 'Egizaklar';
}else if($d<=22 and $m>=6 and $m<=7){
    echo "Qizqichbaqa";
}else if($d<=23 and $m>=7 and $m<=8 and $d>=22){
    echo "Arslon";
}else if($d<=23 and $m>=8 and $m<=9 and $d>=22){
    echo "Parizod";
}else if($d<=23 and $m>=9 and $m<=10 and $d>=22){
    echo "Tarozi";
}else if($d<=23 and $m>=10 and $m<=11 and $d>=22){
    echo "Chayon";
}else if($d<=23 and $m>=11 and $m<=12 and $d>=21){
    echo "O\'qotar";
}else if($d<=22 and $m>=1 and $m<=12 and $d>=19){
    echo "Echki";
} 
?>