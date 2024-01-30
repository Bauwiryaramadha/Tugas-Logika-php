<?php

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

// Gabungkan dua array
foreach ($bil2 as $value) {
    if (!in_array($value, $bil1)) {
        $bil1[] = $value;
    }
}

// Hapus nilai yang sama
$unik = [];
foreach ($bil1 as $value) {
    if (!in_array($value, $unik)) {
        $unik[] = $value;
    }
}

// Urutkan array dari terbesar ke terkecil (bubble sort)
$count = count($unik);
for ($i = 0; $i < $count - 1; $i++) {
    for ($j = 0; $j < $count - $i - 1; $j++) {
        if ($unik[$j] < $unik[$j + 1]) {
            // Tukar posisi jika ditemukan yang lebih besar
            $temp = $unik[$j];
            $unik[$j] = $unik[$j + 1];
            $unik[$j + 1] = $temp;
        }
    }
}

// Tampilkan hasil
echo "Bilangan setelah digabung dan diurutkan dari terbesar ke terkecil: " . implode(', ', $unik);

?>