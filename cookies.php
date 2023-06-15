<?php 
/**
 * name
 * value
 * expiry
 * path
 */
$userInfo = "Doe";
setcookie("username", $userInfo, time() + 3600, "/");

//acessing the cookie
echo $_COOKIE['username'];

?>