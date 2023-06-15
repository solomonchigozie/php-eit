<?php 

$hostname = "localhost";
$databaseName = "emblicdb";
$userName = "root";
$password = "";
$connect = mysqli_connect($hostname, $userName, $password, $databaseName);
if(!$connect){
    echo "connection failed";
}
//update a user record
$sql = "UPDATE student SET firstname='Silvanus' WHERE id='1' ";
$update = mysqli_query($connect, $sql);
if($update){
    echo "Updated ";
}


?>