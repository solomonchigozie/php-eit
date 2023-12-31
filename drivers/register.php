<?php 
session_start();
require 'config.php';
$error = [];
if(isset($_POST['register'])){
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
        array_push($error, "Enter your fullname");
    }
    if(empty($email)){
        array_push($error, "Enter your email");
    }

    if(empty($password)){
        array_push($error, "Password Cannot be empty");
    }
    //check if email is available
    $check = "SELECT * FROM drivers WHERE email='$email' ";
    $query = mysqli_query($connect, $check);
    if(mysqli_num_rows($query) > 0){
        array_push($error, "Email has been taken");
    }

    if(count($error) == 0){
        $encryptpassword = md5($password);
        $insert = "INSERT INTO drivers(fullname, email, password) 
        VALUES('$fullname','$email', '$encryptpassword') ";

        if(mysqli_query($connect, $insert)){
            echo "<script>alert('Registration was successful')</script>";
        }else{
            echo "<script>alert('An error occured, please try agin')</script>";
        }

       
    }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-secondary">
    
        <div class="row justify-content-center py-5">
            <div class="col-md-6 py-4 bg-light">
                <h3>Register</h3>

                <span class="text-danger">
                    <?php foreach($error as $errors){echo $errors; } ?>
                </span>

                <form action="<?=$_SERVER['PHP_SELF']?>" method='post'>
                    <div class="form-group">
                        <input type="text" class="my-3 px-2 form-control" 
                        placeholder="Fullname" name="fullname">
                    </div>
                    <div class="form-group">
                        <input type="email" class="my-3 px-2 form-control" 
                        placeholder="Email" name='email'>
                    </div>
                    <div class="form-group">
                        <input type="password" class="my-3 px-2 form-control" 
                        placeholder="Password" name='password'>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-secondary" 
                        name='register'>
                    </div>

                </form>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>