<?php
// Open a file
$fileopen = fopen("MagDevintquestions.csv", "r");
// Fetching data from csv file row by row
while (($data = fgetcsv($fileopen))) {
    foreach ($data as $content) {
        echo $content."\n";
    }
}
fclose($fileopen);