<?php

include '../db/connection.php';

session_start();

if(isset($_SESSION['cff-login'])){
    if(!$_SESSION['cff-login']){
        header('location: ./index.php');
    }
}
else{
    header('location: ./index.php');
}

$lists = [];
$reqquerry = "SELECT * FROM customer Order By id desc";
$reqresult = $conn->query($reqquerry);
while($row = $reqresult->fetch_assoc()){
    $lists[] = $row; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/lists.css?v=<?= time() ?>">
    <title>Lists</title>
</head>
<body>
    <h2>TESDA Customer Feedback Form</h2>
    <div class="search-box">
        <input id="search" type="search" placeholder="filter here..">
        <a href="./methods/logout.php"><i class="fa fa-power-off"></i></a>
    </div>
    <table>
        <thead>
            <tr>
            <th width="35%">Name</th>
            <th width="30%">Purpose</th>
            <th width="15%">Date</th>
            <th width="20%">Actions</th>
        </tr>
        </thead>
        <tbody id="conts">
            <?php foreach($lists as $row): ?>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['purpose'] ?></td>
                    <td><?= $row['date'] ?></td>
                    <td class="actions">
                        <a title="view" href="./viewer.php?id=<?= $row['id'] ?>"><i class="fa fa-eye"></i></a>
                        <a title="edit" href="./edit.php?id=<?= $row['id'] ?>"><i class="fa fa-edit"></i></a>
                        <a title="delete" href="./methods/delete.php?id=<?= $row['id'] ?>"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
        
    </table>

    <script src="./js/search.js"></script>

    
</body>
</html>