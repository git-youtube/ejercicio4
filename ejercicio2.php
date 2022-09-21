<?php
$productos=array('zapato1','zapato2','zapato3','zapato4','zapato5');
$precios=array(10,20,30,40,50);
$frase="";

for($i=0;$i < count($precios); $i++){
    $frase=$frase."<br>".$productos[$i]." ".$precios[$i];
}
echo $frase;