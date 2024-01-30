<?php
function formatNumber($number) {
    if ($number < 1000) {
        echo $number;
    }
    elseif ($number < 1000000) {
        echo number_format($number / 1000, 1) . "k";
    }
    else {
        echo number_format($number / 1000000, 1) . "M";
    }
}

formatNumber(9500);
echo "<br>";
formatNumber(2700000);
?>