<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="fullname" placeholder="name">
        <br>
        <input type="email" name="email" placeholder="email">
        <br>
        <input type="submit" value="submit" name="click">
    </form> 
    
    <?php
        // if(isset($_POST)){
        //     print_r($_POST);
        // } 
        //if submit button is clicked
        if(isset($_POST['click'])){
            echo $_POST['fullname'] . "<br>" . $_POST['email'];
        }

    ?>
</body>
</html>