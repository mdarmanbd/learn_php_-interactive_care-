
<?php 

class MathCalculator{
    private $number;
    static $name;
    static $text;
    static function doSomething($n){
        
        // self::$name = 50;
        // self::helloWorld();
        echo "Do some thing {$n} <br>";
        echo self::$text = "Are you here <br>";
    }


    static function helloWorld(){
        echo "Hello wolrd <br>";
    }


    function sayHi(){
        self::$name = "Rayhan";
        // self::helloWorld();
        // $this->helloWorld();
        $this->number;
        echo "Hi bro <br>";
    }
}

// $math = new MathCalculator();
// $math-> sayHi();

// MathCalculator::doSomething(10);

// echo MathCalculator::$name;


class parentClass{
    static function sayHi(){
        echo "Hi I am Abu jhor kefari <br>";
    }
}

class chieldClass extends parentClass{
    static function sayHi(){
        // echo " Hi Bro <br>";
        parent::sayHi();
    }
}

chieldClass::sayHi();


















?>


