<?php

$contents = file_get_contents("./phone.json"); // get json data
$data = json_decode($contents); // convart the data into object, array

$names = ["Setu", "Faisal", "Arman", "Rayhan", "Masud", "Sunny"];

// echo"<pre>";
// print_r($data[0]->shop->Bashundhara);
// echo"</pre>";

// for ($i = 0; $i < count(($names)); $i++) {
//     echo $i ." ". $names [$i];
//     echo "<br>";
// }

// foreach($names as $id => $name){
//     echo $id;
//     echo $name;
//     echo "<br>";
// }

$i = 10;

while ($i--) {  // post decrement
    echo $i;
    echo "<br>";
}

echo "Out side i value : " . $i;
echo "<br>";
echo boolval(-1);