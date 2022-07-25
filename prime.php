<?php
//Prime numbers 
//input = 1 - 10
//output = 2, 3,5,7
$n = 11;
$res = '';
for ($i = 2; $i < $n; $i++) {
    if ($n % $i == 0) {
        return 0;
    }
    return 1;
    //$res = $i;
}
//echo $res;
for ($i = 1; $i < 100; $i++) {
    $f = $res;
    if ($f == 1) {
        echo $num . " ";
    }
}
//$a = Prime(3);
// if ($a == 1) {
//     echo "Prime";
// } else {
//     echo "Not Prime!";
// }
