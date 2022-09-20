<html>
<?php
//Check number is positive, negative
//$num = $_POST["$check"];
$num = 12;
if ($num > 0) {
    echo "Entered number is Positive : " . ($num);
} elseif ($num < 0) {
    echo "Entered number is Negative : " . ($num);
} else {
    echo "Entered number is Zero :" . ($num);
}
?>
</html>
