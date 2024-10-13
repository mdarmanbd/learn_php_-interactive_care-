<?php 
ob_start();
session_start();


if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
    header('location: sesson.php');
}else{
    if($_SESSION['username'] == 'arman' && $_SESSION['password'] == '1234'){
        ?>

        <h2>Welcome to our website</h2>
        <p>
            <a href="logout.php">Logout</a>
        </p>

       <?php
    }else{
        header('location: sesson.php');
    }
}


?>