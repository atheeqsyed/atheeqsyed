<?php
for ($x = 0; $x <= 6; $x++) {
    for ($y = 1; $y <= $x; $y++) {
        echo '&nbsp;&nbsp;';
    }
    for ($z = 6; $z >= $x; $z--) {
        echo "$y";
    }
    echo "<br>";
}

echo "<br>";
for ($m = 0; $m <= 6; $m++) {
    for ($n = 1; $n <= $m; $n++) {
        echo '&nbsp;';
    }
    for ($o = 6; $o >= $m; $o--) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";
for ($m = 0; $m <= 6; $m++) {
    for ($o = 6; $o >= $o; $o--) {
        echo "*";
    }
    echo "<br>";
}
