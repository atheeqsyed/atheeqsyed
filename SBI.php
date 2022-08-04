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
