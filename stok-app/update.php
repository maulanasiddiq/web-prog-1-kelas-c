<?php
include "koneksi.php";

$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error) {
    echo "Gagal koneksi : " . $koneksi->connect_error;
} else {
    echo "Sambungan basis data berhasil";
}

// echo "KODE : " . $_POST["kode"];
// echo "NAMA BARANG : " . $_POST["namaBarang"];
// echo "STOK : " . $_POST["stok"];

$query = "update stok_barang set nama_barang=$_POST['namaBarang'], stok=$_POST['stok'] where kode=$_POST['kode']";

if($koneksi->query($query) === true) {
    echo "<br> Data " . $_POST["namaBarang"] . " berhasil diupdate".
    '<a href="main.php"> Lihat Data</a>';
} else {
    echo "<br> Data GAGAL disimpan";
}

$koneksi->query($query);

$koneksi->close();
?>