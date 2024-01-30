<?php
// Contoh waktu
$waktu1 = "19.00";
$waktu2 = "23.45";
$waktu3 = "08.55";

// Pisahkan jam dan menit
list($jam1, $menit1) = explode('.', $waktu1);
list($jam2, $menit2) = explode('.', $waktu2);
list($jam3, $menit3) = explode('.', $waktu3);

// Tentukan apakah waktu adalah AM atau PM
$ampm1 = $jam1 >= 12 ? 'pm' : 'am';
$ampm2 = $jam2 >= 12 ? 'pm' : 'am';
$ampm3 = $jam3 >= 12 ? 'am' : 'pm'; 

// Ubah format jam
$jam12_1 = $jam1 % 12;
$jam12_1 = $jam12_1 == 0 ? 12 : $jam12_1;

$jam12_2 = $jam2 % 12;
$jam12_2 = $jam12_2 == 0 ? 12 : $jam12_2;

$jam12_3 = $jam3 % 12;
$jam12_3 = $jam12_3 == 0 ? 12 : $jam12_3;

// Menggunakan operator ternary untuk menampilkan hasil
echo "Waktu 1: menjadi " . sprintf("%02d.%02d %s", $jam12_1, $menit1, $ampm1) . "<br>";
echo "Waktu 2: menjadi " . sprintf("%02d.%02d %s", $jam12_2, $menit2, $ampm2) . "<br>";
echo "Waktu 3: menjadi " . sprintf("%02d.%02d %s", $jam12_3, $menit3, $ampm3) . "<br>";
?>

