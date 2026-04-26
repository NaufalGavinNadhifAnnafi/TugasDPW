<?php

$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");

echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br>";

echo "Saya suka " . $namaBuah[1] . "<br>";

echo "Saya suka " . $namaBuah[2] . "<br>";

echo "Saya suka " . $namaBuah[3] . "<br>";

echo "Saya suka " . $namaBuah[4] . "<br>";

$umur = array(
    "Naufal" => "18 Tahun",
    "Gavin" => "19 Tahun",
    "Nadhif" => "20 Tahun"
);

$umur['Gavin Nadhif'] = "19 Tahun";

echo "Umur Naufal adalah " . $umur['Naufal'] . "<br>";

foreach ($umur as $nama => $usia) {
    echo "Umur $nama adalah $usia <br>";
}

?>