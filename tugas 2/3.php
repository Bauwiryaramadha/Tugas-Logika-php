<?php
// Contoh nilai ujian
$nilai = 100;

// Menggunakan ternary operator untuk menentukan predikat
$predikat = $nilai > 90 ? 'A' : ($nilai > 75 ? 'B' : 'C');

// Menampilkan hasil
echo "Nilai ujian: $nilai\n";
echo "Predikat: $predikat\n";
?>
