<?php
$link = mysqli_connect("127.0.0.1", "root", "", "");
if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$result = mysqli_query($link, "SHOW DATABASES");
while ($row = mysqli_fetch_row($result)) {
    echo $row[0] . "<br>";
}
?>