
<?php 


class DistrictCollection implements IteratorAggregate, Countable{
    private $districts;

    function __construct(){
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts, $district);
    }

    // function getDistrict(){
    //     return $this->districts;
    // }

    function getIterator(){
        return new ArrayIterator($this->districts);
    }

    function count(){
        return count($this-> districts);
    }

}

$districts = new DistrictCollection;
$districts->add("Rajshai");
$districts->add("Bogra");
$districts->add("Khulna");
$districts->add("Dhaka");

// $_dist = $districts->getDistrict();

// print_r($_dist);

// foreach( $districts as $district ){
//     echo $district . "<br>";
// }

// echo count($districts) ;

?>


