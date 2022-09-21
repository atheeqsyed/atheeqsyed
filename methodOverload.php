<?php
//Method overloading - Where two or more methods have same method name with different arguments or parameters and return type.
// Constructor, Operator and Method Overloading

//Method Overloading concept
// utilize php's magic method __call()
class Cal{
    function add($a, $b,$c){
        return $this->$a+$b+$c;
    }
}

$adding = new methodOverloading(2,3);
echo $adding->add();
