<?php
$String = "Hi Welocme to Athiba's World!";
$exp = preg_match("/World/i", $String, $ar);
if ($exp) {
    echo "Match found!";
} else {
    echo "Match not found!";
}
echo "<pre>";
print_r($ar);
echo "</pre>";
