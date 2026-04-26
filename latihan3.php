<?php
$x = 5;
$y = 10;

echo "Penambahan ".$x + $y."<br>";
echo "Pengurangan ".$x - $y."<br>";
echo "Perkalian ".$x * $y."<br>";
echo "Pembagian ".$x / $y."<br>";
echo "Modulus ".$x % $y."<br>";
echo "Exponensial ".$x ** $y."<br>";
echo("<br>");

$x += 2; // $x = $x + 2
$y *= 2; // $y = $y * 2
echo "Penambahan x ".$x."<br>";
echo "Perkalian y ".$y."<br>";
echo("<br>");

echo "Isi ++x = ".++$x."<br>";
echo "Isi x++ = ".$x++."<br>";
echo "Isi x = ".$x."<br>";
echo("<br>");
echo "Isi --y = ".--$y."<br>";
echo "Isi y-- = ".$y--."<br>";
echo "Isi y = ".$y."<br>";
echo("<br>");

$user = "Naufal Gavin";
$status = (empty($user)) ? "Mahasiswa" : "Teknologi Informasi";
echo $status."<br>";
echo "<br><b>Jawaban Tugas:</b><br>";
echo "Perbedaan \$x++ dan ++\$x adalah pada urutan eksekusinya.<br>";
echo "1. ++\$x (Pre-increment): Nilai ditambah dulu baru ditampilkan.<br>";
echo "2. \$x++ (Post-increment): Nilai ditampilkan dulu baru ditambah.";
echo $color = $color ?? "red";

?>