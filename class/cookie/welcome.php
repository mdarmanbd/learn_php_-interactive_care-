<?php

if(!isset($_COOKIE['un']) || !isset($_COOKIE['pw'])){
    header('location: index.php');
}else{
    if($_COOKIE['un'] == 'arman' && $_COOKIE['pw'] == '12345'){
        ?>
        <h2>Welcome to dashboard</h2>
        <p>
            <a href="logout.php">Log out</a>
        </p>
        <?php
    }else{
        header('location: index.php');
    }
}

?>