<?php

$array = array(
    "1C" => array("Naufal", "Gavin", "Nadhif"),
    "1D" => array("Annafi", "Gavin", "Nadhif")
);

print_r($array);
echo "<br><br>";

print_r($array['1D']);
echo "<br><br>";

echo $array['1D'][0] . "<br>";

echo $array['1D'][1] . "<br>";

echo $array['1C'][2] . "<br>";

$array_simple = [
    "1C" => ["Naufal", "Gavin", "Nadhif"],
    "1D" => ["Annafi", "Gavin", "Nadhif"]
];

echo $array_simple['1C'][0];

?>