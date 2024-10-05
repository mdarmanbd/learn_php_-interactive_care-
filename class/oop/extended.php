<?php 

class parentClass{
    protected $name;

    function __construct($newName = ''){
        $this-> name = $newName;
        $this->sayHi();
        $this->sayBro();
    }

    // function sayHi(){
    //     echo "Hi from {$this->name} <br>";
    // }

    function sayHello(){
        echo "My name is {$this->name} <br>";
    }

    function sayBro(){
        echo " Hi bro <br>";
    }
}

class childClass extends parentClass{
    function sayHi(){
        parent::sayHello();
        // echo "Hello world 123 <br>";
    }
}

$childClass = new childClass("Abu ubaida");


?>