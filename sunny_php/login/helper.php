<?php

function initializeSession(): void
{
    if(session_start() === PHP_SESSION_NONE){
        session_start();
    }
}


function getError($key)
{
    if (isset($_POST[$key])) {
        return ucfirst($key). ' is required';
    }

    return '';
}

function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}