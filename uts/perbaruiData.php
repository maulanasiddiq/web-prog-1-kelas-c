<?php
    include "koneksi.php";

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    if($koneksi->connect_error) {
        echo "Gagal koneksi : " . $koneksi->connect_error;
    } else {
        echo "Sambungan basis data berhasil";
    }

    $query = "update data_mahasiswa set nama = '$nama', jurusan = '$jurusan' where nim = '$nim'";

    if($koneksi->query($query) === true) {
        echo "<br> Data " . $_POST["nama"] . " berhasil diupdate".
        '<a href="index.php"> Lihat Data</a>';
    } else {
        echo "<br> Data GAGAL disimpan" . 
        '<a href="index.php"> Kembali ke beranda</a>';
    }

    $koneksi->close();
?>