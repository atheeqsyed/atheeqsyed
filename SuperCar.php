<?php
//
class SuperCar extends Car2
{
    public function __construct($model, $manufacturer_date, $price)
    {
        parent::__construct($model, $manufacturer_date, $price);
    }

    function purchase()
    {
        echo $this->price;
        return "spcl price";
    }
}
