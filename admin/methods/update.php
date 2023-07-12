
<?php

include '../../db/connection.php';

$id = mysqli_real_escape_string($conn, $_GET['id']);

$q = "SELECT * FROM customer where id = '$id' ";
$r = $conn->query($q);
$cff = $r->fetch_assoc();

$name = mysqli_real_escape_string($conn, $_POST['name']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$sex = mysqli_real_escape_string($conn, $_POST['sex']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$purpose = mysqli_real_escape_string($conn, $_POST['purpose']);
$cp = mysqli_real_escape_string($conn, $_POST['cp']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$rate1 = mysqli_real_escape_string($conn, $_POST['rate1']);
$rate2 = mysqli_real_escape_string($conn, $_POST['rate2']);
$rate3 = mysqli_real_escape_string($conn, $_POST['rate3']);
$rate4 = mysqli_real_escape_string($conn, $_POST['rate4']);
$rate5 = mysqli_real_escape_string($conn, $_POST['rate5']);
$rate6 = mysqli_real_escape_string($conn, $_POST['rate6']);
$rate7 = mysqli_real_escape_string($conn, $_POST['rate7']);
$rate8 = mysqli_real_escape_string($conn, $_POST['rate8']);
$rate9 = mysqli_real_escape_string($conn, $_POST['rate9']);
$rate10 = mysqli_real_escape_string($conn, $_POST['rate10']);

$comment = mysqli_real_escape_string($conn, $_POST['comment']);

if($cff['name'] !== $name){
    $update = "UPDATE customer SET name = '$name' where id = '$id' ";
    $conn->query($update);
}

if($cff['age'] !== $age){
    $update = "UPDATE customer SET age = '$age' where id = '$id' ";
    $conn->query($update);
}

if($cff['sex'] !== $sex){
    $update = "UPDATE customer SET sex = '$sex' where id = '$id' ";
    $conn->query($update);
}

if($cff['address'] !== $address){
    $update = "UPDATE customer SET address = '$address' where id = '$id' ";
    $conn->query($update);
}

if($cff['purpose'] !== $purpose){
    $update = "UPDATE customer SET purpose = '$purpose' where id = '$id' ";
    $conn->query($update);
}

if($cff['cp'] !== $cp){
    $update = "UPDATE customer SET cp = '$cp' where id = '$id' ";
    $conn->query($update);
}

if($cff['email'] !== $email){
    $update = "UPDATE customer SET email = '$email' where id = '$id' ";
    $conn->query($update);
}

if($cff['rate1'] !== $rate1){
    $update = "UPDATE customer SET rate1 = '$rate1' where id = '$id' ";
    $conn->query($update);
}

if($cff['rate2'] !== $rate2){
    $update = "UPDATE customer SET rate2 = '$rate2' where id = '$id' ";
    $conn->query($update);
}

if($cff['rate3'] !== $rate3){
    $update = "UPDATE customer SET rate3 = '$rate3' where id = '$id' ";
    $conn->query($update);
}

if($cff['rate4'] !== $rate4){
    $update = "UPDATE customer SET rate4 = '$rate4' where id = '$id' ";
    $conn->query($update);
}

if($cff['rate5'] !== $rate5){
    $update = "UPDATE customer SET rate5 = '$rate5' where id = '$id' ";
    $conn->query($update);
}

if($cff['rate6'] !== $rate6){
    $update = "UPDATE customer SET rate6 = '$rate6' where id = '$id' ";
    $conn->query($update);
}

if($cff['rate7'] !== $rate7){
    $update = "UPDATE customer SET rate7 = '$rate7' where id = '$id' ";
    $conn->query($update);
}

if($cff['rate8'] !== $rate8){
    $update = "UPDATE customer SET rate8 = '$rate8' where id = '$id' ";
    $conn->query($update);
}

if($cff['rate9'] !== $rate9){
    $update = "UPDATE customer SET rate9 = '$rate9' where id = '$id' ";
    $conn->query($update);
}

if($cff['rate10'] !== $rate10){
    $update = "UPDATE customer SET rate10 = '$rate10' where id = '$id' ";
    $conn->query($update);
}

if($cff['comment'] !== $comment){
    $update = "UPDATE customer SET comment = '$comment' where id = '$id' ";
    $conn->query($update);
}

header('location: ../lists.php');

?>