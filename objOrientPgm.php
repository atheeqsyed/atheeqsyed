<?php
include ('SBI.php');
include ('PAYTM.php');

$bank = new SBI('123'); // amount = 123
$app= new PAYTM('234'); // wallet = 234
echo $bank->refund()."\n"; // Print 123
echo $app  ->refund(); // Print 234
