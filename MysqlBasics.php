<?php
$Serv = "localhost";
$User = "root";
$Pass = "A@#345_abcd1";
//Create connection
CreateConnection('localhost', 'root', 'A@#345_abcd1');

function CreateConnection($Serv, $User, $Pass){
    //Establish connection
    $Conn = new mysqli();
    if ($Conn->connect_error) {
        die ("Error" . $Conn->connect_error);
    }
    else {
        echo "Connection Established" . "\n";
    }

}






