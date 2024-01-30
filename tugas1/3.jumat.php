<?php
// Jumlah baris ke samping
$jumlahBarisSamping = 4;

// Jumlah kolom ke samping
$jumlahKolomSamping = 8;

// Loop untuk baris ke samping
for ($baris = 1; $baris <= $jumlahBarisSamping; $baris++) {
    // Loop untuk kolom ke samping
    for ($kolom = 1; $kolom <= $jumlahKolomSamping; $kolom++) {
        echo "* ";
    }

    echo "<br>";
}

echo "<br>";

// Jumlah baris ke bawah
$jumlahBarisBawah = 4;

// Jumlah kolom ke bawah
$jumlahKolomBawah = 8;

// Loop untuk baris ke bawah
for ($baris = 1; $baris <= $jumlahBarisBawah; $baris++) {
    // Loop untuk kolom ke bawah
    for ($kolom = 1; $kolom <= $jumlahKolomBawah; $kolom++) {
        echo "* ";
    }

    echo "<br>";
}
?>
