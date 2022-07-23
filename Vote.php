<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <form method='POST'>
        <h2>Please input your Age:</h2>
        <input type="number" name="num">
        <input type="submit" value="Submit">
    </form>
    <?php
    //Retrieve name from query string and store to a local variable
    $result = $_POST['num'];
    echo "<br>";
    echo ($result < 18) ? 'Not Eligible' : 'Eligible';
    // echo "<h3> Your Age is: $name </h3>";
    ?>
</body>

</html>