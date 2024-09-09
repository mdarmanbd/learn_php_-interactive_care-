<?php

$name = "";
$email = "";
$region = "";
$season = "";
$interests = [];
$participants = 0 ;
$message = "";
$errors = [];

if(!empty($_POST["name"])){
    $name = $_POST["name"];
    if(ctype_alpha(str_replace(" ", "", $name)) === false){
        $errors[] = "Name should contain only alphabets or space";
    }
}else{
    $errors[] = "Name can not be empty";
}

if(!empty($_POST["email"])){
    $email = $_POST["email"];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Email is a valid address";
    }
}else{
    $errors[] = "Email can not be empty";
}

if(!empty($_POST["region"])){
    $region = $_POST["region"];
    $region_array = ["Asia", "Oceania", "Africa", "Europe", "North America", "Latin America"];
    if(!in_array($region, $region_array)){
        $errors[] = "Region is not valid";
    }

}else{
    $errors[] = "Region can not be empty";
}

if(!empty($_POST["season"])){
    $season = $_POST["season"];
    $season_array = ["Summer", "Winter", "Spring", "Autumn", "Monsoon"];
    if(!in_array($season, $season_array)){
        $errors[] = "Season not matched";
    }
}else{
    $errors[] = "Season can not be empty";
}

if(!empty($_POST["interests"])){
    $interests = $_POST["interests"];
    $interests_array = ["Photography", "Trekking", "Star Gazing", "Bird Watching", "Camping"];
    foreach($interests as $interest){
        if(!in_array($interest, $interests_array)){
            $errors[] = "Activity is invalid";
        }
    }
}else{
    $errors[] = "No Item selected";
}

if(!empty($_POST["participants"])){
    $participants = (int) $_POST["participants"];
}else{
    $errors[] = "No participants in mentioned";
}

if(!empty($_POST["message"])){
    $message = $_POST["message"];
}else{
    $errors[] = "No messsages is write";
}


if($errors){
    echo "<pre>";
    print_r($errors);
    echo "</pre>";
}else{
    echo "Name : " . $name . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Region : " . $region . "<br>";
    echo "Season : " . $season . "<br>";
    echo "interests : ";
    print_r($interests);
    echo "<br>";
    echo "Participants : " . $participants . "<br>";
    echo "Message : " . $message . "<br>";
    
}

