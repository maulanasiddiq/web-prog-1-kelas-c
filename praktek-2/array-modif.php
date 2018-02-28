<?php

$data = array (
    "nama" => "maulana",
    "usia" => 20,
    "single" => true,
    0.1 => 5
);

echo "Nama : " .$data["nama"] ."<br>";
echo "Usia : " .$data["usia"] ."<br>";
echo "Status : " .$data["single"] ."<br>";
echo "data lain : " .$data[0.1];

?>