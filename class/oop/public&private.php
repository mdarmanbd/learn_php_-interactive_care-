<?php 

class Fund{
    // public $fund;
    // private $fund;
    
    function __construct($initialValue = 0){
        $this->fund = $initialValue;
    }

    public function addValue($money){
        $this->fund += $money;
        $this-> deductFund(20);
    }
    
    private function deductFund($money){
        $this->fund -= $money;
    }

    public function getTotal(){
        echo " Total value is : {$this->fund} <br>";
    }
}

$ourFund = new Fund(20);
// $ourFund->fund = 20;
$ourFund->addValue(5);
// $ourFund->deductFund(10);
$ourFund->getTotal();




?>