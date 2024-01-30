<?php
$angka1 = 10;
$angka2 = 5;

$hasil = $angka1 / $angka2;

if (is_float($hasil)) {
    echo "$angka1 : $angka2 = " . round($hasil);
} else {
    echo "$angka1 : $angka2 = " . $hasil;
}
?>
