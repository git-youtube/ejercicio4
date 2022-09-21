<?php
$nombre = "Luis";
$nombre2 = "Carlos";
$apellido ="Martinez";
$apellido2 ="Alvarez";
$dni ="11111111E";
$dni2 = "22222222R";

$a = [
    [
        'Nombre' => $nombre,
        'Apellido' => $apellido,
        'Correo' => $dni,
    ],
    [
        'Nombre' => $nombre2,
        'Apellido' => $apellido2,
        'Correo' => $dni2,
    ],
    
];

$s = '<table border="1">';
foreach ( $a as $r ) {
    $s .= '<tr>';
    foreach ( $r as $v ) {
        $s .= '<td>'.$v.'</td>';
    }
    $s .= '</tr>';
}
$s .= '</table>';
echo $s;
