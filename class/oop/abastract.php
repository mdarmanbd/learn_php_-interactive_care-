<?php 

abstract class ourClass{
    function sayHi(){
        echo "Hi";
    }
    abstract function eat($a = '', $b='');
}

class myClass extends ourClass{
    function eat($a = '',$b=''){
        echo "Hello World  {$a}  {$b}  ";
    }
}


$my = new myClass();

$my->eat(5,8);

$my-> sayHi();


?>