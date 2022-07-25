<?php /* tringle */
for ($i = 1; $i < 5; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo '&nbsp;';
    }
    for ($k = 0; $k < 2 * (5 - $i) - 1; $k++) {
        echo "$k";
    }
    echo "<br>\n";
}
