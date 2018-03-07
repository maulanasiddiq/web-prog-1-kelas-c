<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "phb";

$koneksi = new mysqli($server, $username, $password, $db);

if($koneksi->connect_error) {
    echo "Gagal koneksi : " . $koneksi->connect_error;
} else {
    echo "Sambungan basis data berhasil";
}

$koneksi->close();
?>