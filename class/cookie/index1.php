<?php 



if(isset($_POST['form1'])){
    // $name = $_COOKIE['Person'];
    setcookie('Person', $_REQUEST['person'], time() + (86400));
   header('location: index.php');
}
$name = isset($_COOKIE['Person']) ? $_COOKIE['Person'] : null ;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <?php if($name): ?>

   <P> This is the person name : <?php echo $name; ?> to give the vote </P>

    <?php else: ?>
    <P>No vote is add there </P>
    <?php endif ?>


    <form action="" method="post">
        <table>
            <tr>
                <td>Slect person to vote:</td>
                <td>
                    <select name="person">
                        <option value="Mohammod">Mohammod</option>
                        <option value="Arefin">Arefin</option>
                        <option value="Hossain">Hossain</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit" name="form1">
                    <!-- <button type="submit" value="Submit" name="form1" >fsdf</button> -->
                </td>
            </tr>
        </table>
    </form>


</body>
</html>