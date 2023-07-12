
<?php

session_start();

include '../../db/connection.php';

$uname = mysqli_real_escape_string($conn, $_POST['uname']);
$pwd = sha1(mysqli_real_escape_string($conn, $_POST['pwd']));

$q = "SELECT * FROM user";
$r = $conn->query($q);
$user = $r->fetch_assoc();

if($uname === $user['username'] && $pwd === $user['password']){
    $_SESSION['cff-login'] = true;
    header('location: ../lists.php');
}
else{
    
    $_SESSION['login-message'] = 'Username or Password is Incorrect!';

    header('location: ../index.php');
}

?>