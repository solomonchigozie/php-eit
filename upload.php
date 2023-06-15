<?php

$error= [];
$message = '';
if(isset($_POST['upload'])){
    // print_r($_POST);
    // print_r($_FILES);
    $filename = $_FILES['passport']['name'];
    $size = $_FILES['passport']['size'];
    $filepath= "uploads/" . $_FILES['passport']['name'];
    $ext = pathinfo($filepath, PATHINFO_EXTENSION);

    $extarray = ['png','jpg','jpeg'];
    if(!in_array($ext, $extarray)){
        array_push($error, "Invalid Extension");
    }

    if($size > 500000){
        array_push($error, "File is too large");
    }

    if(file_exists($filepath)){
        array_push($error, "The file already exist");
    }

    if(count($error) ==0){
        //upload the file
        if(move_uploaded_file($_FILES['passport']['tmp_name'], $filepath)){
            $message = "Uploaded";
        }else{
            $message =" Failed";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>
    <?php
    //to show errors, loop through the errors array
        foreach($error as $car){
            echo "<span style='color:red'>". $car . "<br> </span>";
        }
    ?>
    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" 
        enctype="multipart/form-data">
        <input type="file" name="passport">
        <br><br> <?=$message?>
        <input type="submit" value="Upload Passport" name="upload">
    </form>
</body>
</html>