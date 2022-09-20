<?php
class PAYTM extends SBI {
    public $wallet;
    public function __construct($wallet)
    {
        $this->wallet= $wallet;
    }
//*The purpose of overriding is to change the behavior of parent class method*.
    public function refund($account){
        return $this->wallet;
    }
}
