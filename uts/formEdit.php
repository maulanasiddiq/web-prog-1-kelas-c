<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data | Aplikasi Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>

    <?php

        include "koneksi.php";
        $koneksiObj = new Koneksi();
        $koneksi = $koneksiObj->getKoneksi();
        $nim = $_GET['edit'];

        if($koneksi->connect_error) {
            echo "Gagal koneksi : " . $koneksi->connect_error;
        }

        $query = "select * from data_mahasiswa where nim = '$nim'";
        $data = $koneksi->query($query);
        $nama = "";
        $jurusan = "";

        if ($data->num_rows <=0){
            echo "Mas/Mba, kalo isi data sesuai prosedur ya!";
        } else {
            while($row = $data->fetch_assoc()) {
                $nim = $row["nim"];
                $nama = $row["nama"];
                $jurusan = $row["jurusan"];
            }
        }
    ?>

   <div class="container">
        <center>
            <br/>
            <h1>Form Ubah Data Mahasiswa</h1>
            <hr>    
        </center>
        
        <form action="perbaruiData.php" method="post">
            <div class="form-group">
                <label for="nama">NIM:</label>
                <input type="text" value="<?php echo $nim; ?>" class="form-control" name="nim" readonly="true">
            </div>
            <div class="form-group">
                <label for="alamat">NAMA:</label>
                <input type="text" value="<?php echo $nama; ?>" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">JURUSAN:</label>
                <input type="text" value="<?php echo $jurusan; ?>" class="form-control" name="jurusan" required>
            </div>		
            <button type="submit" class="btn btn-default">Simpan</button>
            <a href="index.php"<button class="btn btn-danger">Batal</button></a>
        </form>
   </div>
 
</body>
</html>