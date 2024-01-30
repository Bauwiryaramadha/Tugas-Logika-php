<?php

// Inisialisasi variabel
$a = 10;
$b = 10;

// Memeriksa apakah dua variabel sama
if ($a == $b) {
    echo "Kedua variabel sama, maka muunculkan angka a: " . $a;
} else {
    // Mencari angka terbesar
    $angkaTerbesar = max($a, $b);
    echo "Kedua variabel tidak sama, munculkan angka terbesar: " . $angkaTerbesar;
}

?>
