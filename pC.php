<?php
class MAIN{
   public string $name;
    private  int $age;

    function __construct($name, $age)
    {
        $this->name= $name;
        $this->age= $age;
    }
}
$m = new MAIN('Tayyaba', 45);
echo $m->name."\n";

/*class CHILD {
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}*/
//$c = new CHILD('arjun',23 );
//echo $c->name."\n";