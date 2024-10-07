<?php 

interface Animal{
    function makeSound();
}

class Cat implements Animal{
    function makeSound(){
        echo "Meow <br>";
    }
}

class Dog implements Animal{
    function makeSound(){
        echo "Ghuiooo <br>";
    }
}

class Mouse implements Animal{
    function makeSound(){
        echo "Squeak";
    }
}

// $an = new Cat();
// $an->makeSound();

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();

$animals = array($cat, $dog, $mouse);

foreach($animals as $animal){
    $animal->makeSound();
}

?>