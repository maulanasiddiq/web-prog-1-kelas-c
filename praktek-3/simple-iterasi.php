<?php
$awal = 1;

while(true) {
    if($awal ==5) break;
    echo $awal++ . "<br>";
}
echo "<hr>";
do {
    echo $awal-- . "<br>";
    if($awal == 1) break;
} while(true);
?>
<hr>

<?php
$data = array("gula","garam","kopi");
foreach($data as $isi) {
    echo $isi . "<br>";
}
?>