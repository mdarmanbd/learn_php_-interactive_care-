<?php 

$ans = ['Dhaka', 'Rajshahi', 'Khulna'];
$userAns = ['Khulna', 'Dhaka', 'Rajshahi'];

if(array_diff($ans, $userAns) == null){     // no different means null . null == null it's become true
    echo "Correct";
} else {
    echo "Incorrect";
}