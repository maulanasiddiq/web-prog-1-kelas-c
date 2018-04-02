<?php
    include "koneksi.php";

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    $nim = $_REQUEST['nim'];
    $nama = $_REQUEST['nama'];
    $jurusan = $_REQUEST['jurusan'];

    if($koneksi->connect_error) {
        echo "Gagal koneksi : " . $koneksi->connect_error;
    } else {
        echo "Sambungan basis data berhasil";
    }

    $query = "insert into data_mahasiswa (nim,nama,jurusan) values('$nim','$nama','$jurusan')";

    if($koneksi->query($query) === true) {
        echo "<br> Data " . $_POST["nama"] . " berhasil disimpan".
            '<a href="index.php"> Lihat Data</a>';
    } else {
        echo "<br> Data GAGAL disimpan" . 
        '<a href="index.php"> Kembali ke beranda</a>';
    }

    $koneksi->close();
?>