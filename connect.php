<?php 

$hostname = "localhost";
$databaseName = "mydatabase";
$userName = "root";
$password = "";
 
//connection string
$connect = mysqli_connect($hostname, $userName, $password, $databaseName);

if(!$connect){
    echo "connection failed";
}
else{
    echo "connected to database successfully";
}
































//insert data
$name = "Emeka Livinus";
$age = 20;
$dob = "2012-09-10";
$regid = "123456789";

$insert = "INSERT INTO `users` (`name`, `age`, `dob`, `regid`) 
VALUES ('$name', '$age','$dob', '$regid')";

// $sql = mysqli_query($connect, $insert);
// if($sql){
//     echo "Inserted";
// }

//select data
$select = "SELECT * FROM users";
$result = mysqli_query($connect, $select);
while($row = mysqli_fetch_assoc($result)){
    echo $row['name'] . ", ";
}
?>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $fetch = mysqli_query($connect, $select);
            while($res = mysqli_fetch_assoc($fetch)){
                ?>
                    <tr>
                        <td><?php echo $res['name']?></td>
                        <td><?php echo $res['age']?></td>
                    </tr>
                <?php
            }
        ?>
    </tbody>
</table>