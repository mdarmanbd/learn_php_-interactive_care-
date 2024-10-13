<?php
ob_start();
session_start();

// $_SESSION['country'] = "Bangladesh";
// $_SESSION['city'] = "Dhaka";

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

// session_unset();
// session_destroy();

if(isset($_POST['form1'])){
   try{
    
    if($_POST['username'] != 'arman'){
        throw new exception("Username does not match");
    }
    if($_POST['password'] != '1234'){
        throw new exception("Password does not match");
    }

    $_SESSION['username'] = 'arman';
    $_SESSION['password'] = '1234';

    header('location: welcome.php');

   } catch( exception $e ){
        echo $e->getMessage();
   }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Login" name="form1" >
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>