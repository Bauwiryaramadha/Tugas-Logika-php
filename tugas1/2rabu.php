<?php
// Data berat badan dan tinggi badan Beni
$berat_badan = 44; // dalam kilogram
$tinggi_badan = 148; // dalam centimeter

// Menghitung IMT (Indeks Massa Tubuh)
$tinggi_badan_m = $tinggi_badan / 100; // mengonversi tinggi badan ke meter
$imt = $berat_badan / ($tinggi_badan_m * $tinggi_badan_m);

// Menentukan kategori IMT
if ($imt < 18.5) {
    $kategori = "Berat badan kurang";
} elseif ($imt >= 18.5 && $imt < 22.9) {
    $kategori = "Normal";
} elseif ($imt >= 22.9 && $imt < 24.9) {
    $kategori = "Berat badan lebih";
} else {
    $kategori = "Obesitas";
}

// Menampilkan hasil
echo "Berat badan Beni: $berat_badan kg<br>";
echo "Tinggi badan Beni: $tinggi_badan cm<br>";
echo "IMT Beni: $imt<br>";
echo "Kategori IMT Beni: $kategori";
?>