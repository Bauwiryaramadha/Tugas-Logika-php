<?php

// Nilai mata pelajaran
$matematika = 87;
$bahasaInggris = 85;
$bahasaIndonesia = 87;

// Menghitung rata-rata nilai
$rataRata = ($matematika + $bahasaInggris + $bahasaIndonesia) / 3;

// Syarat minimum
$nilaiMinimalMatematika = 87;
$nilaiMinimalInggris = 85;
$nilaiMinimalIndonesia = 87;
$rataRataMinimal = 85;

// Memeriksa apakah syarat terpenuhi
if ($matematika >= $nilaiMinimalMatematika && $bahasaInggris >= $nilaiMinimalInggris
    && $bahasaIndonesia >= $nilaiMinimalIndonesia && $rataRata >= $rataRataMinimal) {
    echo "Selamat! Anda diterima.";
} else {
    echo "Maaf, Anda tidak memenuhi syarat untuk diterima.";
}

?>
