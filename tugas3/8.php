<?php

// Diketahui
$jamNormal = 8;
$kompensasiSatu = 50000;
$kompensasiDua = 25000;

// Ditanyakan
$jamMulai = 8;
$jamSelesai = 22;

// Jawaban
$jumlahNormal = $jamSelesai - $jamMulai;

if ($jumlahNormal > $jamNormal) {
    $jumlahKompensasi = $jumlahNormal - $jamNormal;

    if ($jumlahKompensasi == 1) {
        $kompensasi = $kompensasiSatu;
    } else {
        $kompensasi = (($jumlahKompensasi - 1) * $kompensasiDua) + $kompensasiSatu;
    }

    echo "Jumlah kompensasi: " . $kompensasi;
} else {
    echo "Tidak mendapat kompensasi";
}
?>
