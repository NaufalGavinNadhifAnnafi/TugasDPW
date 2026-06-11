<?php
$link = mysqli_connect("127.0.0.1", "root", "", "db_praktikum");

if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>