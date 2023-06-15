<?php
session_start();

$user = "Ted";
$_SESSION['username'] = $user;

echo $_SESSION['username'];

//remove values in from a session
// session_unset($_SESSION['username']);

//destroy the session
// session_destroy();

print_r($_SESSION);
?>