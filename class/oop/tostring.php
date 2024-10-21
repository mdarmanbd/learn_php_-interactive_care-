<?php 

class color {
    public $color;
    public $green;
    function __construct($color, $green){
        $this->color = $color;
        $this->green = $green;
    }

    function __toString(){
        return "This color is {$this->color} another color is {$this->green} " ;
    }
}

$color = new color('Red', 'Green');

echo $color;

?>