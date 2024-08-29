<?php

$name = "Foysal";

$user = [
    "firstName" => "Mohammad",
    "lastName" => "Arman",
    "Sadiur Rahaman Setu",
    7 => "Manikganj",
    "CTG",
    4 => "Dhaka",
    "Comiila",
    "name" => "$name",
    7 => "Pabna",
    6 => "Pabna",
    1 => "Arafat", // 1
    "1" => "Hoosain", // 1
    true => "Arman", // 1

];

$number = [10, 20, 30, 50, 60];

// array_push($number, 80); add element in last on the array
// array_push($number, 800);
// array_pop($number);  delet the last element on the array
// array_unshift($number, 100); add a element fist on the array
// array_shift($number); remove the element fist on the array
// rsort($number);
// sort($number);
// $number = array_sum($number);
// $newSlice = array_slice($number, 2, 2); cutting and create a new array 
array_splice($number, 1, 2, [100,500,900]);

echo '<pre>';
// print_r($user);
// var_dump(count($number));
var_dump($number);
// var_dump($newSlice);
echo '</pre>';

