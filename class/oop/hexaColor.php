<?php 

// echo "dsd";

class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = ''){
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    function getColor(){
        return $this->color;
    }

    function setColor(){
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    private function parseColor(){
        if($this->color){
            list($this->red, $this->green, $this->blue ) = sscanf($this->color, '%02x%02x%02x');
            echo "red: {$this->red} <br>" ;
            echo "green: {$this->green} <br>";
            echo "blue: {$this-> blue}"; 
        }else{
            list($this->red, $this->green, $this->blue ) = array(0,0,0);
            echo "red: {$this->red} <br>" ;
            echo "green: {$this->green} <br>";
            echo "blue: {$this-> blue}";
        }
    }


}

$myColor = new RGB('#ffffff');

?>