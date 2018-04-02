<?php
    include "koneksi.php";
    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();
    // $nim = $_GET['del'];
    $query = "DELETE FROM data_mahasiswa WHERE nim=" . $_GET["del"];

    if($koneksi->query($query) === true) {
        echo "<br> Data berhasil dihapus".
            '<a href="index.php"> Lihat Data</a>';
    } else {
        echo "<br> Data GAGAL disimpan" . 
        '<a href="index.php"> Kembali ke beranda</a>';
    }
?>
