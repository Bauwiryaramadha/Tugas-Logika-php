<?php
// Contoh presentase kehadiran awal
$presentaseKehadiranAwal = 100;

// Kondisi sakit & izin berkurang 3%
$alasanSakitIzin = true;
$alfa = true;

$hadir = ($alasanSakitIzin ) ? $presentaseKehadiranAwal -= 3 : (($alfa) ? $presentaseKehadiranAwal -= 5 : $presentaseKehadiranAwal);

// if ($alasanSakitIzin) {
//     $presentaseKehadiranAwal -= 3;
// } elseif ($alfa) {
//     $presentaseKehadiranAwal -= 5;
// }

// Tampilkan hasil
echo "Presentase kehadiran awal: " . $presentaseKehadiranAwal . "%<br>";

// Contoh nilai ujian
$nilaiUjian = 80;

// Tentukan predikat berdasarkan nilai ujian
$predikat = ($nilaiUjian > 90) ? "A" : (($nilaiUjian > 75) ? "B" : "C");

// Tampilkan hasil predikat
echo "Nilai ujian: " . $nilaiUjian . "<br>";
echo "Predikat: " . $predikat;
?>