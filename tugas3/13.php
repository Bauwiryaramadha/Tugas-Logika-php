<?php
$totalharian = 100000; // Total harian yang disetel sebesar 100.000
$totalPembelian = 130000; //total pembelian
$hariPembelian = "Selasa";
$diskon = 0; 
// Cek apakah hari pembelian adalah Selasa
if ($hariPembelian == "Selasa") {
    // Diskon 5% untuk pembelian di hari Selasa
    $diskon += 0.05; 
}
if ($totalPembelian > 100000) {
    // Diskon tambahan 7% untuk total pembelian di atas 100.000
    $diskon += 7 + 5; 
}
// Hitung jumlah diskon dalam rupiah
$jumlahDiskon = ($diskon / 100) * $totalPembelian;

$totalYangDibayar = $totalPembelian - $jumlahDiskon;

// Tampilkan hasil
echo "Total Pembelian: Rp " . number_format($totalPembelian, 2, ',', '');
echo "<br>";
echo "diskon.$diskon%";
echo "<br>";
echo "Jumlah Diskon: Rp " . number_format($jumlahDiskon, 2, ',', '.') ;
echo "<br>";
echo "Total yang harus dibayar: Rp " . number_format($totalYangDibayar, 2, ',', '.');
?>