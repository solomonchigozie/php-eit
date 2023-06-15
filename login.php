<?php 
session_start();

$error = [];
if(isset($_POST['click'])){
    function cleaninput($formdata){
        $data = trim($formdata);
        $data = stripslashes($formdata);
        $data = htmlspecialchars($formdata);
        return $data;
    }
    $email = cleaninput($_POST['email']);
    $fullname = cleaninput($_POST['fullname']);
    $password = cleaninput($_POST['password']);

    //validaiton
    if(empty($email)){
        array_push($error, "Email cannot be empty");
    }
    if(empty($fullname)){
        array_push($error, "Fullname cannot be empty");
    }
    if(empty($password)){
        array_push($error, "Password cannot be empty");
    }

    if(count($error) ==0){
        $_SESSION['email'] = $email;
        $_SESSION['fullname'] = $fullname;

        //redirect to money page
        echo "<script>location = 'money.php'</script>";
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php
    if(isset($_COOKIE['loginerror'])){
        echo $_COOKIE['loginerror'];
    }
    //show form error
    foreach($error as $errors){echo $errors . "<br>"; }
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <input type="email" name="email" placeholder="email">
        <br><br>
        <input type="text" name="fullname" placeholder="fullname">
        <br><br>
        <input type="password" name="password" placeholder="password">
        <br> <br>
        <input type="submit" value="Login" name="click">
    </form> 
</body>
</html>