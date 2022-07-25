<?php
for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo '&nbsp;&nbsp;';
    }
    for ($k = 0; $k < 5 - $i; $k++) {
        echo "*";
    }

    echo "<br>";
}
