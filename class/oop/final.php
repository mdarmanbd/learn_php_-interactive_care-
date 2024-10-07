<?php 

abstract class OurClass{
   final function doSomething(){
        echo "Hello world";
    }
}

class myClass extends OurClass{
    // function doSomething(){
    //     echo "Hello Bro I am here";
    // }
}

$my = new myClass();

// $my->doSomething();


// inheritance code most use like this // 

class shape{

}

class Shapes{

    private $shapes;

    function __construct(){
        $this->shapes = array();
    }

    function addShape(Shape $shape){
        array_push($this->shapes, $shape);
    }

    function totalShapes(){
        return count($this->shapes);
    }
}

class Rectangle extends shape{}

class Triangle extends shape{}

class Students{}


$shapesCollection = new Shapes();

$shapesCollection-> addShape(new Rectangle());
$shapesCollection-> addShape(new Triangle());
// $shapesCollection-> addShape(new Students());

echo $shapesCollection->totalShapes();

?>