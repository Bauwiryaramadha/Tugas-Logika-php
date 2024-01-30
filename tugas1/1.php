<?php 

$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];
$kelompok_pertama = [];
$kelompok_kedua = [];

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        array_push($kelompok_pertama, $nilai);
    } else {
        array_push($kelompok_kedua, $nilai);
    }
}

echo "Kelompok Pertama: ";
foreach ($kelompok_pertama as $nilai) {
    echo "$nilai ";
}
echo "<br>";
echo "\nKelompok Kedua: ";
foreach ($kelompok_kedua as $nilai) {
    echo "$nilai ";
}


?>