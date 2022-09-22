<?php
$array = array();


for ($i = 0; $i <= 50; $i++) {
    $numeros = rand(0,49);
    $array[$i] = $numeros;
    
    echo "<br>" . $array[$i];
    
    
}
echo "<br>";
print_r (array_count_values($array));

?>