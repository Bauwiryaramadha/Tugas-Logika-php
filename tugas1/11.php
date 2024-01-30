<?php 

// Tampilkan lah data dibawah ini yang hanya memiliki diskon
$barang = [
    [
        'nama' => 'Ban',
        'diskon' => 10,
    ],
    [
        'nama' => 'Oli mesin',
    ],
    [
        'nama' => 'Kampas Rem',
    ],
    [
        'nama' => 'Busi',
        'diskon' => 9,
    ],
    [
        'nama' => 'Akumulator',
        'diskon' => 7,
    ],
    
];

foreach ($barang as $item) {
    if (isset($item['diskon'])) {
        echo  $item['nama'] . " Diskon: " . $item['diskon'] . "%\n";
    }
}

?>