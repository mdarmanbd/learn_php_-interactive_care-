<?php

// $name = "Foysal";

$number = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

// for ($i = 1 ; $i <= 100; $i++) {
//     if( $i % 2 == 0 && $i % 3 == 0 ){
//         echo "$i: Fizz Buzz";
//         echo "\n";
//     }
//     if($i % 2 == 0){
//         echo "Buzz";
//         echo "\n";
        
//     }
//     elseif($i % 3 == 0){
//         echo "Fizz";
//         echo "\n";
//     }
//     else{
//         echo "$i";
//         echo "\n";
//     }
// };

for ($i = 1; $i <= 10; $i++){
    if($i == 5){
        break;// continue;
    }else{
        echo "$i";
    }
}

echo "\n";

$name = "ko";

switch($name) {
    case "bn" :
        echo "Bangla";
        break;
    case "en" :
        echo "English";
        break;
    case "de" :
        echo "Dhaka";
        break;
    case "ua":
        echo "Arabic";
        break;
    default:
        echo "Nothing to machied";            
}

echo "\n";

function add ($number1, $number2){
    echo $number1 + $number2;
};
function minus ($number1, $number2){
    echo $number1 - $number2;
};

function calculator ($number1, $operation, $number2){
    if($operation == '+'){
        add($number1, $number2);
    }elseif($operation == '-'){
        minus($number1, $number2);
    }
}

calculator(10, '-', 20);