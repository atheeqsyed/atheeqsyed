<?php
class SBI{
    public $amount;
    function __construct($amount){
        //The $this keyword refers to the current object, and is only available inside methods.
         $this-> amount= $amount;
    }

    public function refund()
    {

       return  $this->amount;
    }
}

class PAYTM extends SBI {
    public $wallet;
    public function __construct($wallet)
    {
        $this->wallet= $wallet;
    }
//The purpose of overriding is to change the behavior of parent class method.
   public function refund(){
        return $this->wallet;
    }
}

$bank = new SBI('123'); // amount = 123
$app= new PAYTM('234'); // wallet = 234
echo $bank->refund()."\n"; // Print 123
echo $app  ->refund(); // Print 234
