<?php 
session_start();

$fullname = "";
$email = "";
$nameError = "";
$emailError = "";
$passwordError = "";

if(isset($_POST['submit'])){
    function cleaninput($formdata){
        $data = trim($formdata);
        $data = stripslashes($formdata);
        $data = htmlspecialchars($formdata);
        return $data;
    }

    $fullname = cleaninput($_POST['fullname']);
    $email = cleaninput($_POST['email']);
    $password = cleaninput($_POST['password']);


    //validaiton
    if(empty($fullname)){
        $nameError = "Enter your fullname";
    }
    if(empty($email)){
        $emailError = "Enter your email";
    }

    if(empty($password)){
        $passwordError = "Password cannot be empty";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Validation</title>
</head>
<body>
    <?php 
    
        // include('nav.php') 
        require_once('nav.php');
        echo $_SESSION['username'];
    ?>


    <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <input type="text" name="fullname" placeholder="fullname" 
        value="<?=$fullname?>">
        <br> <span style="color:red"><?=$nameError?></span>
        <br><br>
        <input type="email" name="email" placeholder="email" value="<?=$email?>">
        <br> <span style="color:red"><?=$emailError?></span>
        <br><br>
        <input type="password" name="password" placeholder="password">
        <br><span style="color:red"><?=$passwordError?></span>
        <br><br>
        <input type="submit" name="submit" value="Register">
    </form>
    
</body>
</html>