<?php

if(isset($_POST['form1'])){
    $path = $_FILES['my_file']['name'];
    $path_tmp = $_FILES['my_file']['tmp_name'];

    // $data = getimagesize($path_tmp); // usage only image property
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    // echo $path;
    // echo "<br>";
    // echo $path_tmp;
    $arr = explode('.', $path);
    // echo $arr[0];
    // echo $arr[1];
    $fileName = time(). "." . $arr[1];
    echo $fileName;
    if($arr[1] == 'jpg' || $arr[1] == 'png' || $arr[1] == 'gif'){
        move_uploaded_file($path_tmp, 'upload/' . $fileName);
    }else{
        echo "Invalid file formet";
    }

    // $finfo = finfo_open(FILEINFO_MIME_TYPE);
    // $mime = finfo_file($finfo, $path_tmp);
    // echo $mime;
    
   

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
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Select a file:</td>
                <td>
                    <input type="file" name="my_file">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="submit" name="form1">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>