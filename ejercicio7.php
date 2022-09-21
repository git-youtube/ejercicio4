<?php
$numeros = array();
$normal="";
$reves="";

for ($i = 0; $i <= 10;$i++) {
    $random = rand(1,200);
    $numeros[$i] = $random;
    $normal=$normal." ".$numeros[$i]; 
}


for ($i = count($numeros)-1; $i >= 0;$i--) {
    $reves = $reves ." ". $numeros[$i];
    
}

echo $normal."<br>".$reves."<br>";
print_r($numeros);