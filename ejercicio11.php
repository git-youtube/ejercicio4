<?php
$array = [
    'Lunes'    => 1,
    'Martes'  => 2,
    'Miercoles'  => 3,
    'Jueves' => 4,
    'Viernes' => 5,
    'Sabado' => 6,
    'Domingo' => 7,
];

print_r($array);
echo "<br><br><br>Media: ";
print_r((array_sum($array)/count($array)));
echo "<br>Suma: ";
print_r(array_sum($array));