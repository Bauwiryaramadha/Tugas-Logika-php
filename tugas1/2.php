<?php
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

foreach ($data as $person) {
    echo $person['nama'] . ': ';

    if ($person['tahun'] % 4 == 0 && ($person['tahun'] % 100 != 0 || $person['tahun'] % 400 == 0)) {
        echo 'lahir pada tahun kabisat (' . $person['tahun'] . ')';
    } else {
        echo 'lahir bukan pada tahun kabisat (' . $person['tahun'] .')';
    }

    echo "\n";
    echo "<br>";
}
?>