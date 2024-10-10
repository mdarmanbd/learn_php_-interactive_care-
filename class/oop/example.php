
<?php 


class DistrictCollection implements IteratorAggregate{
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

}

$districts = new DistrictCollection;
$districts->add("Rajshai");
$districts->add("Bogra");
$districts->add("Khulna");


// $_dist = $districts->getDistrict();

// print_r($_dist);

foreach( $districts as $district ){
    echo $district . "<br>";
}

?>


