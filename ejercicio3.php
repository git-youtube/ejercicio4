<?php
$productos=array('zapato1','zapato2','zapato3','zapato4','zapato5');
$precios=array(10,20,30,40,50);
$precioFinal=array();
$rebaja=20;
$frase="";

for($i=0;$i < count($precios); $i++){
    $total=0;
    $total=$precios[$i]*$rebaja/100;
    $precioFinal[$i]=$total;
    $frase=$frase."<br>".$productos[$i]." ".$precioFinal[$i];
}
echo $frase;