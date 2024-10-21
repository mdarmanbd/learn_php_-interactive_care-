<?php 

class Planet{
    static function name(){
         echo self::getName(); // to using a self it called early binding . it refare a parent class function
        // echo static::getName(); // to using a static it called late binding . it refare a chield class function
    }

    static function getName(){
        return "March ";
    }
}

class Earth extends Planet{
    static function getName(){
        return "Earth";
    }
}

// Planet::name();

Earth::name(); 



?>