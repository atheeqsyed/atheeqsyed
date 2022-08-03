<?php
$filename = "/home/atheeq/Git_Basics/atheeq.txt";
$file = fopen($filename, "r");

$content = fread($file, 15);

echo "$content". "\n";
fclose($file);