<?php
$x = "Tempore deserunt beatae alias distinctio non possimus illo atque aut repellat itaque quod velit enim?";
$y = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
$a = $x." ".$y;
$brr = explode(" ", $a);
foreach ($brr as $b) {
    echo"".$b." => ". strlen($b)."<br>";
}
?>
