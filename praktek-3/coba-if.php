<form method="get" action="coba-if.php">
    Kelas: <input type="text" name="kelas"><br>
    <input type="submit" value="Proses">
</form>

<?php
if(array_key_exists("kelas", $_GET)) {
    // switch($_GET["kelas"]) {
    //     case "4a":
    //         echo 'Kamu di kelas 4a kan.';
    //         break;
    //     case "4c":
    //         echo "Kamu adalah mahasiswa terbaik";
    //         break;
    //     default :
    //         echo "Kamu bukan mahasiswa semester 4";
    // }
    if($_GET["kelas"] == "4a") {
        echo "Kamu di kelas 4a kan.";
    } elseif($_GET["kelas"] == "4c") {
        echo "Kamu adalah mahasiswa terbaik.";
    } else {
        echo "Kamu bukan mahasiswa semester 4";
    }
}
?>