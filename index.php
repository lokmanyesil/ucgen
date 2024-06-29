<?php
function ucgen($sayi) {
    $i = 1;
    while ($i <= $sayi) {
        for ($j = 1; $j <= $i; $j++) {
            echo "0";
        }
        echo "<br>"; // Yeni satıra geç
        $i++;
    }
}

ucgen(15);

