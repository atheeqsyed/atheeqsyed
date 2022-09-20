
<?php
// Count the words in string
// Input  : I LOVE YOU
// Output : 3

use LDAP\Result;

$var = "I LOVE YOU JAAN you";
$result = 0;
for ($i = 0; $i < strlen($var); $i++) {
    if ($var[$i] === ' ') {
        $result += 1;
    }
}
$result += 1;
echo $result;
?>
