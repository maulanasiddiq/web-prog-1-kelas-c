<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Data Mahasiswa</title>	
	<script type="text/javascript" src="assets/DataTables/media/js/jquery.js"></script>
	<script type="text/javascript" src="assets/DataTables/media/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/jquery/jquery.min.js">
	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/dataTables.bootstrap.css">
</head>
<body>
	<div class="container">
        <center>
            <br/>
            <h1>Aplikasi Data Mahasiswa</h1>
            <hr>    
        </center>
        <br/>

		<table class="table table-striped table-bordered data">
            <a href="input.php"><button type="button" class="btn btn-primary">Tambah Data</button></a>
			<thead>
				<tr>			
					<th>NIM</th>
					<th>NAMA</th>
					<th>JURUSAN</th>
					<th>OPSI</th>
				</tr>
			</thead>
			
            <?php

                include "koneksi.php";
                $koneksiObj = new Koneksi();
                $koneksi = $koneksiObj->getKoneksi();

                if($koneksi->connect_error) {
                    echo "<tr><td>";
                    echo "Gagal koneksi : " . $koneksi->connect_error;
                    echo "</tr></td>";
                }

                $query = "select * from data_mahasiswa";
                $data = $koneksi->query($query);

                if ($data->num_rows <=0){
                    echo "<tr><td>";
                    echo "DATA NIHIL";
                    echo "</tr></td>";
                } else {
                    while($row = $data->fetch_assoc()) {            
            ?>
                        <tbody>
                            <td> <?php echo $row['nim']; ?> </td>
                            <td> <?php echo $row['nama']; ?> </td>
                            <td> <?php echo $row['jurusan']; ?> </td>
                            <td>
                            <a href="formEdit.php?edit=<?php echo $row['nim'] ?>"><button type="button" class="btn btn-success btn-sm">Ubah</button></a>
                            <a href="hapusData.php?del=<?php echo $row['nim']; ?>"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                            </td>
                        </tbody>
            <?php                            
                    }
                }
            ?>
		</table>
	</div>

</body>
</html>