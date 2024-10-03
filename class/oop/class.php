<?php 

   class Human{
        public $name;
        function sayHi(){
            echo "Salam\n";
            $this->sayName();
        }
        function sayName(){
            echo "My name is {$this->name}\n";
        }
        
   }

   class Cat{
        function sayHi(){
            echo "Meow";
        }
    }

    class Dog{
        function sayHi(){
            echo "Woof";
        }
    }

    $h1 = new Human();
    $h2 = new Human();
    $c1 = new Cat();
    $d1 = new Dog();

 
    $h1->name = "Arman"; // set
    $h1->sayHi();
    $h2->name = "Rayhan";
    $h2->sayHi();
   // echo $h1->name; // get

   



?>