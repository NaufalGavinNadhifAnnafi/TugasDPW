<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $kodeMK = mysqli_real_escape_string($link, $_POST['kodeMK']);
    $namaMK = mysqli_real_escape_string($link, $_POST['namaMK']);
    $sks    = mysqli_real_escape_string($link, $_POST['sks']);
    $jam    = mysqli_real_escape_string($link, $_POST['jam']);

    $query  = "INSERT INTO t_matakuliah VALUES ('$kodeMK', '$namaMK', '$sks', '$jam')";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query gagal: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }
}

header("location:viewmatakuliah.php");
?>