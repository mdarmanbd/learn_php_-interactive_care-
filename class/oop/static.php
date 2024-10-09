
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

// chieldClass::sayHi();


class A{
    private $name;
    private static $fullName;
    protected static $lastName;
    static function sayHi(){
        // self::$name = 'fjhsksjd';
        self::$fullName;
        echo "Hi Bro <br>";
    }
}

class B extends A{
    static function sayHi(){
        self::$lastName = 'This is abu ubaida';
        parent::sayHi();
        // echo parent::$fullName;
        echo "This is chiled class";
    }
}


B::sayHi();











?>


