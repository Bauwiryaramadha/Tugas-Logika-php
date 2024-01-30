<?php
function createArray(...$jurusan) {
    $result = array_map('strtoupper', $jurusan);
    $result = array_unique($result);
    return array_values($result);
}

$result = createArray("PPLG", "HTL", "KLN", "PMN", "PPLG", "HTL");
print_r($result);
?>
