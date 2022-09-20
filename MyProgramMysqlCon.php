<?php
mySqlConn('localhost',  'root','A@345_abcd1');
MysqlCon();
echo "\n";
Method1();
Method2();
//Method3();

function mySqlConn($servername,$username, $password)
{
// Connection
    $conn = new mysqli();

// For checking if connection is successful or not
    if ($conn->connect_error) {
        die("Connection failed: "
            . $conn->connect_error);
    }
    echo "Connected successfully";
}

function connMethod1()
{
    $link = mysqli_connect('localhost', 'root', 'A@#345_abcd1');
    if (!$link) {
        die('Could not connect: ' . mysqli_error());
    }
    echo 'Connected successfully with Method1' . "\n";
    mysqli_close($link);
}

function connMethod2()
{
    // we connect to localhost at port 3307
    $link = mysqli_connect('127.0.0.1:3306', 'root', 'A@#345_abcd1');
    if (!$link) {
        die('Could not connect: ' . mysqli_error());
    }
    echo 'Connected successfully with Method 2';
    mysqli_close($link);
}

function connMethod3()
{
    // variant 2: with localhost
    $link = mysqli_connect('localhost:/tmp/mysql.sock', 'root', 'A@#345_abcd1');
    if (!$link) {
        die('Could not connect: ' . mysqli_error());
    }
    echo 'Connected successfully';
    mysqli_close($link);
}
?>
