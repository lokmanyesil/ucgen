<?php
function printPatternMixed($rows) {
    $i = 1;
    while ($i <= $rows) {
        for ($j = 1; $j <= $i; $j++) {
            echo "0";
        }
        echo "<br>"; // Yeni satıra geç
        $i++;
    }
}

printPatternMixed(5);

