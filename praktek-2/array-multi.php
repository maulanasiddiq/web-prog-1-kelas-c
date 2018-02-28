<?php

$data = array(
    "web-prog" => array(
        "tamami" => 7,
        "aldi" => 8,
        "eko" => 6
    ),
    "kalkulus" => array(
        "eko" => 9,
        "aldi" => 8,
        "tamami" => 5
    )
);

echo "Nilai web-prog untuk Aldi : " .$data["web-prog"]["aldi"] ."<br>";
echo "Nilai kalkulus untuk Aldi : " .$data["kalkulus"]["aldi"] ."<br>";

?>