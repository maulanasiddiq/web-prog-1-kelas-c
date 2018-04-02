<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data | Aplikasi Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
 
   <div class="container">		
        <center><h1>Form Tambah Data Mahasiswa</h1></center>
        <br>
        <form action="simpanData.php" method="post">
            <div class="form-group">
                <label for="nama">NIM:</label>
                <input type="text" onkeypress="return hanyaAngka(event, false)" maxlength="9" class="form-control" name="nim" required>
            </div>
            <div class="form-group">
                <label for="alamat">NAMA:</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">JURUSAN:</label>
                <input type="text" class="form-control" name="jurusan" required>
            </div>		
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php"<button class="btn btn-danger">Batal</button></a>
        </form>
   </div>
 
    <script language="javascript">
        function hanyaAngka(e, decimal) {
        var key;
        var keychar;
        if (window.event) {
            key = window.event.keyCode;
        } else
        if (e) {
            key = e.which;
        } else return true;
    
        keychar = String.fromCharCode(key);
        if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
            return true;
        } else
        if ((("0123456789").indexOf(keychar) > -1)) {
            return true;
        } else
        if (decimal && (keychar == ".")) {
            return true;
        } else return false;
        }
    </script>
</body>
</html>