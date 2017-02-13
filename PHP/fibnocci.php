<?php

//computes the Fibonacci sequence

$x = 0;    
$y = 1; 
$n =20;
for($i=0;$i< $n;$i++)    
{    
    $z = $x + $y;    
    echo $z."<br />";         
    $x=$y;       
    $y=$z;     
}   
?>
