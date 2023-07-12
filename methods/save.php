<?php
ob_start();

include '../db/connection.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$sex = mysqli_real_escape_string($conn, $_POST['sex']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$purpose = mysqli_real_escape_string($conn, $_POST['purpose']);
$cp = mysqli_real_escape_string($conn, $_POST['cp']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

$date = date("m-d-Y");

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

if($_FILES["sign"] !== null){

    $extension=array("jpeg","jpg","png","gif","jfif");
    $file_name=$_FILES["sign"]["name"];
    $file_tmp=$_FILES["sign"]["tmp_name"];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
    if(in_array($ext,$extension)) {
        if(!file_exists("signatures/".$file_name)) {
            move_uploaded_file($file_tmp=$_FILES["sign"]["tmp_name"],"signatures/".$file_name);
            $insert="INSERT Into customer (name, age, sex, address, cp, email, date, rate1, rate2, rate3, rate4, rate5, rate6, rate7, rate8, rate9, rate10, comment, signature, purpose)
            VALUES ('$name', '$age', '$sex', '$address', '$cp', '$email', '$date', '$rate1', '$rate2', '$rate3', '$rate4', '$rate5', '$rate6', '$rate7', '$rate8', '$rate9', '$rate10', '$comment', '$file_name', '$purpose')";
            $res=mysqli_query($conn, $insert);
        }
        else {
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            move_uploaded_file($file_tmp=$_FILES["sign"]["tmp_name"],"signatures/".$newFileName);
            $insert="INSERT Into customer (name, age, sex, address, cp, email, date, rate1, rate2, rate3, rate4, rate5, rate6, rate7, rate8, rate9, rate10, comment, signature, purpose)
            VALUES ('$name', '$age', '$sex', '$address', '$cp', '$email', '$date', '$rate1', '$rate2', '$rate3', '$rate4', '$rate5', '$rate6', '$rate7', '$rate8', '$rate9', '$rate10', '$comment', '$newFileName', '$purpose')";
            $res=mysqli_query($conn, $insert);
        }
    }

}

session_start();
$_SESSION['save-message'] = 'Form submitted successfuly, Thank you for your time!';

header('location: ../index.php');

?>