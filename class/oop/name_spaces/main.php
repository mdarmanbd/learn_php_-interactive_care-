<?php 
// namespace Astronomy;

// include "planet.php";
// include "earth.php";
//  $planet = new \Astronomy\planets\Planet(); // qualified name
// // $planet = new \Astronomy\planets\earth();
// $planet->getName();

 namespace Project;
// namespace Project\Motorcycle;
include "c1.php";
include "c2.php";

use \Project\Motorcycle\Bike as anyName; //alies 
use \Project\Bike as abc;

// $a = new Bike();
// echo $a->getName();

// $b = new anyName();
// echo $b->getName();

$p = new abc();
echo $p->getName();

?>