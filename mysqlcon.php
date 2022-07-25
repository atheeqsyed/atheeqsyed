<?php
$connection=mysqli_connect("localhost", "root", "", "") or die("Couldn't connect!");
if($connection){
    echo "Connection is successful"
}
mysqli_close($connection)
 ?>