<?php

class Person
{
    //Properties
    public $name;
    public $addr;
    public $type;

    //Internally called itself. Constructor is used to replace the setter
    public function __construct($name, $addr)
    {
        $this->name = $name;
        $this->addr = $addr;
    }

    //Methods
    private function getType()
    {
        return $this->type;
    }

    function getname()
    {
        return $this->name;


    }

    function getaddr()
    {
        return $this->addr;
    }
}

class superPerson extends Person {
    public  $habit;
    public $name;

    public function __construct($habit,$name)
    {
        $this->habit=$habit;
        $this->name= $name;
    }

    function gethabit(){
        return $this->habit;
    }
////The purpose of overriding is to change the behavior of parent class method.
    function  getname(){
        echo 1+1;
        return $this->name.'abc';
    }

}

$asd= new Person("athiq", "asd");
$sP= new superPerson('jumping',"Kouser");
/*echo $sP-> gethabit();
echo $sP->getname();
echo $asd->getname();*/
echo $asd.$sP->getname();


