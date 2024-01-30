<?php

$barang = [
    ['nama_barang' => 'Pasta Gigi', 'harga_barang' => 18000, 'jumlah_beli' => 1],
    ['nama_barang' => 'Sabun Mandi', 'harga_barang' => 5000, 'jumlah_beli' => 3],
    ['nama_barang' => 'Aloe Vera Sheet Mask', 'harga_barang' => 15000, 'jumlah_beli' => 5],
];

$total_pembayaran = 0;

foreach ($barang as $item) {
    $total_barang = $item['harga_barang'] * $item['jumlah_beli'];
    $total_pembayaran += $total_barang;

    echo "Andi membeli " . $item['jumlah_beli'] . " " . $item['nama_barang'] . " seharga Rp " . $total_barang . "\n";
    echo "<br>";
}

echo "\nTotal uang yang perlu dibayar oleh Andi adalah Rp " . $total_pembayaran . "\n";

?>