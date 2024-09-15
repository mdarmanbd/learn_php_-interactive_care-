<?php
 $file_name = "F:\\code\\learn_php_-interactive_care-\\class\\file\\text.txt";
//  $file_pointer = fopen($file_name, "r"); // read mode

// $data = fgets($file_pointer);
// echo $data;
// echo "<br>";
// echo $data;

// while($data = fgets($file_pointer)){
//     echo $data;
//     echo "<br>";
// }

// rewind($file_pointer);

// fseek($file_pointer, 6);

// while($data = fgets($file_pointer)){
//     echo $data;
//     echo "<br>";
// }

// fclose($file_pointer);

// $custom_arry = file($file_name);
// echo "<pre>";
// print_r($custom_arry);
// echo "</pre>";

// $data = file_get_contents($file_name);
// echo $data;

// $file_name = "F:\\code\\learn_php_-interactive_care-\\class\\file\\text.txt";
// $file_pointer = fopen($file_name, "w"); // write mode
// $file_pointer = fopen($file_name, "a"); // append mode

// fwrite($file_pointer, "Jackfruit\n");
// fwrite($file_pointer, "Apple 2\n");
// fwrite($file_pointer, "Lemon\n"); 
// fwrite($file_pointer, "Remon\n");

// file_put_contents($file_name, "Apple\n",FILE_APPEND | LOCK_EX);
// file_put_contents($file_name, "Bpple\n",FILE_APPEND | LOCK_EX);
// file_put_contents($file_name, "Cpple\n",FILE_APPEND | LOCK_EX);

$persons = [
    [
        'name' => 'John Doe',
        'mail' => 'john@gmail.com',
        'age' => 31
    ],
    [
        'name' => 'Jehn Doe',
        'mail' => 'jehn@gmail.com',
        'age' => 32
    ],
    [
        'name' => 'tension Doe',
        'mail' => 'tension@gmail.com',
        'age' => 30
    ]
];

$file_pointer = fopen($file_name, "w");

foreach( $persons as $person ){
    // $data = sprintf("%s,%s,%s\n", $person['name'], $person['mail'], $person['age']);
    // fwrite($file_pointer, $data);

    fputcsv($file_pointer, $person);

}