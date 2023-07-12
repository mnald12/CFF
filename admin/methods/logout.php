<?php

session_start();
$_SESSION['cff-login'] = false;
$_SESSION['login-message'] = 'You have been Logged out!';

header('location: ../index.php');

?>