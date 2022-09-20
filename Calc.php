<!DOCTYPE html>
<html>
<?php
$val1 = $_POST['val1'];
$val2 = $_POST['val2'];
$submit = $_POST['opr'];
$result = '';
switch ($operator) {
    case "Add":
        $result = $val1 + $val2;
        break;
        // case '-':
        //     $value = $val1 - $val2;
        //     break;
        // case '*':
        //     $value = $val1 * $val2;
        //     break;
        // case '/':
        //     $value = $val1 / $val2;
        //     break;
}
?>

<body>
    <form action="" method="post">
        <h3>Addition, Subtraction, Multiplication &amp; Division using PHP!</h3>
        <hr />
        <P>
            <input type="number" name="val1" id="val1" value="<?php echo $val1; ?>" /> <b>Num 1</b>
        </p>
        <p>
            <input type="number" name="val2" id="val2" alue="<?php echo $val2; ?>" /> <b>Num 2</b>
        </p>
        <br />
        <p> <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
        </p>

        <input type="submit" name="opr" value="Add">
    </form>
</body>

</html>
