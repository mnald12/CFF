
<?php

include '../../db/connection.php';

$id = mysqli_real_escape_string($conn, $_GET['id']);

$query = "DELETE FROM customer WHERE id = '$id'";
$conn->query($query);

header('location: ../lists.php');

?>