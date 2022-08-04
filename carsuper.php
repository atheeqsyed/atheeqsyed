<?php

include ('Car2.php');
include ('SuperCar.php');

//$rprice = new Car("Santro", "23 - 12 - 2022", 1000);
$sprice = new SuperCar("Swift", "10 - 10 - 2022", 1500);
//echo $rprice->purchase() . "\n";
//$rprice->purchase();
$sprice->purchase();

