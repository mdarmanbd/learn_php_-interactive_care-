<?php 

class MotorCycle{
   
    private $parameters;

    function __construct($displacement, $capacity, $mileage){
        $this->parameters = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }


    function __get($name){ // magic method
      echo $this->parameters[$name]; // $this->displacement,capacity,mileage
    }

    function __set($name, $value){
       echo  $this-> parameters[$name] = $value;
    }

    function __call($name, $arguments){
        if('run' == $name){
            if($arguments){
                echo "I am running at function and my arguments is: {$arguments[0]}, {$arguments[1]}";
            }
            else{
                echo "Hello world, I am running function: {$name}";
            }
        }
        
    }

    static function __callStatic($name, $arguments){
        echo "function name: {$name}, {$arguments[0]} Static Call function are called is here " ;
    }

}

$pulsar = new MotorCycle('150cc','15ltr','45kmp');

// echo $pulsar->getDisplacement();

// $pulsar->displacement = '250cc';

// echo $pulsar->mileage; // call direct private method

// echo $pulsar->displacement;

$pulsar->run('52','69');

MotorCycle::wash('45po'); // call to static way
MotorCycle::carBy('rt54p'); // call to static way
MotorCycle::carBy('rt58888p'); // call to static way
?>