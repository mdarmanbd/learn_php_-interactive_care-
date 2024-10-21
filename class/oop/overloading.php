<?php 

class MotorCycle{
    // private $displacement, $capacity, $mileage;
    private $parameters;

    function __construct($displacement, $capacity, $mileage){
        $this->parameters = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }

    // function getDisplacement(){
    //    return $this->parameters['displacement'];
    // }

    // function setDisplacement($displacement){
    //     $this->parameters['displacement'] = $displacement;
    // }

    function __get($name){ // magic method
      echo $this->parameters[$name]; // $this->displacement,capacity,mileage
    }

    function __set($name, $value){
       echo  $this-> parameters[$name] = $value;
    }

}

$pulsar = new MotorCycle('150cc','15ltr','45kmp');

// echo $pulsar->getDisplacement();

$pulsar->displacement = '250cc';

echo $pulsar->mileage; // call direct private method

// echo $pulsar->displacement;

?>