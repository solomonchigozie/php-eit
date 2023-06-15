<?php 
session_start();

if(!isset($_SESSION['email'])){
    //redirect user to login.php
    // header('location : login.php');
    setcookie("loginerror", "Please login first", time() + 10, "/");
    echo "<script>location = 'login.php' </script>";
}
//logout user
if(isset($_GET['logout'])){
    session_destroy();
    echo "<script>location = 'login.php' </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Money</title>
</head>
<body>
    <h1>welcome <?=$_SESSION['fullname']?>, take the money
        &#8358;<?=number_format(rand(20000,1000000))?>  

    </h1>

    <a href="<?php echo $_SERVER['PHP_SELF'] ?>?logout=1">Logout</a>
</body>
</html>