<?php
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
$todo="";

print_r($fruits);
echo "<br>";
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
echo "<br>";
natsort($fruits);
print_r($fruits);
?>