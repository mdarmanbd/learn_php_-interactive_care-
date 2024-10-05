<?php 

class Human{
    public $name;
    public $age;
    public function __construct($personName, $personAge = 0){
        // echo "New Human object is created<br>";
        // echo "{$personName} <br>";
        $this->name = $personName;
        $this->age = $personAge;
    }
    function sayHi(){
        // echo "Salam<br>";
        $this->sayName();
    }
    function sayName(){
        if($this->age){
            echo " My Name is {$this->name}, I am {$this->age} years old <br>";
        }else{
            echo " My Name is {$this->name}, I don't know what my age <br>";
        }
       
    }
}

$h1 = new Human("Arman", 30);
$h2 = new Human("Rayhan", 28);
$h3 = new Human("Rahu");
$h4 = new Human("saima");
// $h2 = new Human("Hossain");
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();
$h4->sayHi();
// $h2->sayHi();
?>