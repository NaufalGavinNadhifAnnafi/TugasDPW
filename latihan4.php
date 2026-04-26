<?php

$t = date("H"); 

echo "If <br>";
if ($t < 16) {
    echo "Selamat siang!";
}


$t = date("H"); 
echo "<br> If dan Else <br>";

if ($t < 20) {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}

echo "<br> Nested If <br>";

if ($t < 10) {
    echo "Selamat pagi!";
} elseif ($t < 16) {
    echo "Selamat siang!";
} elseif ($t < 20) {
    echo "Selamat sore!";
} else {
    echo "Selamat malam!";
}

?>