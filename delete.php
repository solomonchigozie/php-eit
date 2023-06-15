<?php 

$hostname = "localhost";
$databaseName = "emblicdb";
$userName = "root";
$password = "";
$connect = mysqli_connect($hostname, $userName, $password, $databaseName);
if(!$connect){
    echo "connection failed";
}
$sql = "DELETE from student where id=2";
$delete = mysqli_query($connect, $sql);

if($delete){
    echo "Deleted";
}