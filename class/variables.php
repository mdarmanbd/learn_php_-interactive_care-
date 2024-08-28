<?php

$name = "  Mohammod Arman Hossain ";
// echo str_word_count($name);

$newName = substr($name, 5, 8);

// echo $newName;

// echo '/';
// echo " i Love $name";
// echo (" i Love" . " " . $name . "!"); 

$x = '5' ;
$y = 5 ;

// echo $x + $y;

// var_dump(5);

// var_dump(5.2);

// var_dump("Jhone cina");
// var_dump([1,2,3]);

// $abc = 5; 
// $xyz = 10;

// function myFunction(){
//     echo( $abc );
//     global $abc, $xyz;
//     $g = $abc + $xyz;
// }

// echo( $abc );


// myFunction();

// echo $g;

$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $b = $x + $y;
//   echo $b;
} 

myTest();  // run function
 // output the new value for variable $y

//  echo "heloo $x";

// echo strlen("Hello world");

// echo str_word_count("Hello world fdf");

// echo strpos("Hello world! Bmw", "!");

// echo strtoupper($name);
// echo strtolower($name);

// echo str_replace("Arman", "Arafat", $name);

// echo strrev($name);

echo trim($name);

