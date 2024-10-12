<?php 

$error = false ;

if(isset($_POST['form1'])){
    if($_REQUEST['username'] == 'arman' && $_REQUEST['password'] == '12345'){
        setcookie('un', $_REQUEST['username'], time() + (86400));
        setcookie('pw', $_REQUEST['password'], time() + (86400));
        header('location: welcome.php');
        
    }else{
        $error = false;
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
                <td>
                    <input type="post" name="username">
                </td>
            </tr>
        
            <tr>
                <td>Password:</td>
                <td>
                    <input type="post" name="password">
                    <?php if($error): ?>
                       <P> wrong password </P>
                    <?php endif ?>   
                </td>

            </tr>
            <tr>
                <td>remember me</td>
                <td><input type="checkbox" value=""></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit" name="form1">
                </td>
            </tr>
        </table>
    </form>


</body>
</html>