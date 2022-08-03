<?php
$servername = "localhost";
$username = "root";
$password = "A@#345_abcd1";
$dbname = "Sample";


// Creating a Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error){
    die("Con failed!." . $conn->connect_error);
}
/*//Create a Database named Test
$sql = "CREATE DATABASE Sample";
    */


// sql to create table
/*    $sql = "CREATE TABLE Persons (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
}*/

//Insert data into Table
$sql = "INSERT INTO Persons (firstname, lastname, email, created_date)
VALUES ('Atheeq', 'Syed', 'athiq@gmail.com','2022-07-23 01:00:00')";

/*//Update data into table
$sql = "Update Persons SET firstname= 'Johny' where Id=2";*/

/*//Write query
$query="SELECT * from Persons";*/

if ($conn->query($sql)) {
    echo "Updated successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//Close connection
$conn->close();