<?php 

// define('PI', 3.1416);
// echo PI;

class MyClass{
    const CITY = "Dhaka";

    function sayHi(){
        echo "Hi I am Here, " . self::CITY;
    }

}

// $my = new MyClass();
// $my->sayHi();
// echo MyClass::CITY;

class student{
    private $name;
    private $age;
    private $class;

    function __construct($name='', $age='', $class=''){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $value){
        $this->$prop = $value;
    }

}

$classRoom = new student('arman', '30', '24'); // pass the value

// echo $classRoom->class;
// echo $classRoom->name;

$classRoom->age = '40'; // key and value set 

echo $classRoom->age;



?>