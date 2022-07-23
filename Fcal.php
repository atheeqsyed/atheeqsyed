<!DOCTYPE html>
<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
switch ($operator) {
    case "Add":
        $result = $first_num + $second_num;
        break;
}
?>

<body>
    <form action="" method="post" id="quiz-form">
        <p>
            <b>First Number</b> <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" />
        </p>
        <p>
            <b>Second Number</b> <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" />
        </p>
        <p>
            <b>Result</b> <input readonly="readonly" name="result" value="<?php echo $result; ?>">
        </p>
        <input type="submit" name="operator" value="Add" />
        <!-- <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" /> -->
    </form>
</body>

</html>