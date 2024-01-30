<?php
//buatlah sebuah fungsi yang akan membandingkan 2 buah nama. lalu, menampilkan jumlah karakater dari dua nama tersebut, dan menampilkan nama yang memiliki jumlah karakter lebih banyak serta selisihnya 
function pembandingNama($nama1, $nama2) {
    $panjangNama1 = strlen($nama1);
    $panjangNama2 = strlen($nama2);

    echo "Jumlah karakter nama pertama: $panjangNama1 <br>";
    echo "Jumlah karakter nama kedua: $panjangNama2 <br>";

    if ($panjangNama1 > $panjangNama2) {
        $selisih = $panjangNama1 - $panjangNama2;
        echo "$nama1 memiliki jumlah karakter lebih banyak daripada $nama2 sebanyak $selisih karakter.";
    } elseif ($panjangNama1 < $panjangNama2) {
        $selisih = $panjangNama2 - $panjangNama1;
        echo "$nama2 memiliki jumlah karakter lebih banyak daripada $nama1 sebanyak $selisih karakter.";
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama.";
    }
}

pembandingNama("BanuWirya Ramadhan", "Syahira Amelia");
?>