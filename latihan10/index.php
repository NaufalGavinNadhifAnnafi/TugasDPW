<?php
require_once ('kelas/manusia.php');

$andi = new manusia();
$andi->setNama("Naufal Gavin Nadhif Annafi");
$andi->setUmur(20);

$budi = new manusia();
$budi->setNama("aprilka deta");
$budi->setUmur(24);

echo "Identitas Budi:<br>";
echo "Nama: " . $budi->getNama() . "<br>";

echo "<br>Identitas Anda:<br>";
echo "Nama: " . $andi->getNama() . "<br>";
echo "Umur: " . $andi->getUmur() . " tahun<br>";
echo "NIK: " . $andi->getNIK() . "<br>";
?>