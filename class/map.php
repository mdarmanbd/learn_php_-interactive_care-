<?php

$number = [1,2,3,4,5,6,7];

// $newNumber = [];

// for($i = 0; $i < count($number); $i++){
//     $newNumber[] = $number[$i] * 2 ;
// }

// echo "<pre>";
// var_dump($newNumber);
// echo "</pre>";

// $newNumber = array_map( function ($number) {
//     return $number * 2;
// }, $number);

$newNumber = array_map( fn($num) => $num * 2, $number );
    


echo "<pre>";
var_dump($newNumber);
echo "</pre>";