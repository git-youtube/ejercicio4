<?php
$precioFinal=array();
$completo="";


for($i=0;$i <=10; $i++){
    $random = rand(1,99);
    $precioFinal[$i]=$random;
    $completo=$completo." ".$precioFinal[$i];
}

echo $completo;
echo "<br>".min($precioFinal);


?>