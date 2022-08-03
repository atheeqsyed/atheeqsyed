<?php
class sbi{
    public $acc;
    function __red($acc)
    {
        $this->acc= $acc;
    }
    function getAcc(){
        return $this->acc;
    }

}
class paytm extends sbi
{
    public $pytmWallet;
    public $acc;
    function __red($acc)
    {
      //  $this->pytmWallet= $pytmWallet;
       $this->acc= $acc;
    }
    function getWallet(){
        return $this->pytmWallet;
    }

    function getAcc()
    {
       return $this->acc."asd";
    }
}
$p = new paytm("Completed");
$s = new  sbi("ATHEEQ");
echo $p->getWallet();
echo $s->getAcc();



