<?php
//Learn
class Car1
{
    public string $model;
    public string $manufacturer_date;
    public int $price;

    
    function __construct($model, $manufacturer_date, $price)
    {
        $this->model = $model;
        $this->manufacturer_date = $manufacturer_date;
        $this->price = $price;

    }

    function purchase()
    {
        echo $this->price;
        return "regular price";
    }
}

