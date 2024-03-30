<?php
for ($i=1; $i<=9; $i++){
    for ($j = 1; $j<=9; $j++){
        if ($i%2==1 and $j%2==1){
            echo $i." x ".$j." = ".$i*$j."<br>";
        } 
    }
    echo "<br>";
}
 
?>