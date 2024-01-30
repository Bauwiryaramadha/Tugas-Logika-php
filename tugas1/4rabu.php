<?php
function ubahFormatWaktu($waktu) {
    // Pisahkan jam dan menit
    list($jam, $menit) = explode('.', $waktu);

    // Tentukan apakah waktu adalah AM atau PM
    $ampm = $jam >= 12 ? 'pm' : 'am';

    // Ubah format jam
    $jam12 = $jam % 12;
    $jam12 = $jam12 == 0 ? 12 : $jam12;

    // Menggunakan ternary operator untuk menggabungkan kembali waktu dengan format yang diinginkan
    return sprintf("%02d.%02d %s", $jam12, $menit, $ampm);
}

// Contoh penggunaan
$waktu1 = "19.00";
$waktu2 = "23.45";
$waktu3 = "08.55";

$hasil1 = ubahFormatWaktu($waktu1);
$hasil2 = ubahFormatWaktu($waktu2);
$hasil3 = ubahFormatWaktu($waktu3);

echo "Waktu 1: $waktu1 menjadi $hasil1\n";
echo "Waktu 2: $waktu2 menjadi $hasil2\n";
echo "Waktu 3: $waktu3 menjadi $hasil3\n";
?>
