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

$id = mysqli_real_escape_string($conn, $_GET['id']);

$q = "SELECT * FROM customer Where id = '$id' ";
$r = $conn->query($q);
$cff = $r->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CFF Viewer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/viewer.css?v=<?= time() ?>">
</head>
<body>
    <div class="search-box">
        <h3>Edit Customer Feedback Form</h3>
        <a title="home" class="home" href="./lists.php"><i class="fa fa-home"></i></a>
        <a title="print" onclick="printDiv('page')" class="print" href="#"><i class="fa fa-print"></i></a>
        <a title="logout" class="logout" href="./methods/logout.php"><i class="fa fa-power-off"></i></a>
    </div>
    <div id="page">
    <div class="page">
        <div class="header">
            <b>Customer Feedback Form</b>
            <br>
            <b>Public Assistance and Complaint Desk (PACD)</b>
            <br>
            <b>(FRONT)</b>
        </div>
        <div class="body">
            <p class="serial">TESDA-OP-AS-03-F01</p>
            <p class="serial-number">Rev. No. 01-10/01/20</p>
            <h1 class="title">CUSTOMER FEEDBACK FORM</h1>
            <p class="date">Petsa <span><?= $cff['date'] ?></span></p>
            <div class="forms">
                <div class="title">
                    <p class="header">Pangalan</p><p class="value"><?= $cff['name'] ?></p>
                </div>
                <div class="age">
                    <p class="header">Edad</p><p class="value"><?= $cff['age'] ?></p>
                </div>
                <div class="sex">
                    <?php if($cff['sex'] === 'male') { ?>
                        <p class="header">Kasarian</p><input type="checkbox" checked><p>Lalaki</p><input type="checkbox"><p>Babae</p>
                    <?php } else { ?>
                        <p class="header">Kasarian</p><input type="checkbox"><p>Lalaki</p><input type="checkbox" checked><p>Babae</p>
                    <?php } ?>
                </div>
            </div>
            <div class="forms">
                <div class="address">
                    <p class="header">Tirahan/ Tangapan</p><p class="value"><?= $cff['address'] ?></p>
                </div>
            </div>
            <div class="forms">
                <div class="number">
                    <p class="header">Telepono/ CP#</p><p class="value"><?= $cff['cp'] ?></p>
                </div>
                <div class="email">
                    <p class="header">Email Address</p><p class="value"><?= $cff['email'] ?></p>
                </div>
            </div>
            <p class="note">Lagyan ng tsek (/) ang patlang ayon sa antas ng serbisyong iyong natangap.</p>
            <div class="check-form">
                <p>1. Mabilis na serbisyo</p> <p class="line1"><?= $cff['rate1'] === 'Very Satisfactory' ? '/' : '' ?></p><p class="emj1">&#128515;</p> <p class="line2"><?= $cff['rate1'] === 'Satisfactory' ? '/' : '' ?></p><p class="emj2">&#128578;</p> <p class="line3"><?= $cff['rate1'] === 'Poor' ? '/' : '' ?></p><p class="emj3">&#128542;</p>
            </div>
            <div class="check-form">
                <p>2. Mahusay na serbisyo</p> <p class="line1"><?= $cff['rate2'] === 'Very Satisfactory' ? '/' : '' ?></p><p class="emj1">&#128515;</p> <p class="line2"><?= $cff['rate2'] === 'Satisfactory' ? '/' : '' ?></p><p class="emj2">&#128578;</p> <p class="line3"><?= $cff['rate2'] === 'Poor' ? '/' : '' ?></p><p class="emj3">&#128542;</p>
            </div>
            <div class="check-form">
                <p>3. Malinis at maayos na tangapan</p> <p class="line1"><?= $cff['rate3'] === 'Very Satisfactory' ? '/' : '' ?></p><p class="emj1">&#128515;</p> <p class="line2"><?= $cff['rate3'] === 'Satisfactory' ? '/' : '' ?></p><p class="emj2">&#128578;</p> <p class="line3"><?= $cff['rate3'] === 'Poor' ? '/' : '' ?></p><p class="emj3">&#128542;</p>
            </div>
            <div class="check-form">
                <p>4. May malasakit at nauunawaan ang serbisyo</p> <p class="line1"><?= $cff['rate4'] === 'Very Satisfactory' ? '/' : '' ?></p><p class="emj1">&#128515;</p> <p class="line2"><?= $cff['rate4'] === 'Satisfactory' ? '/' : '' ?></p><p class="emj2">&#128578;</p> <p class="line3"><?= $cff['rate4'] === 'Poor' ? '/' : '' ?></p><p class="emj3">&#128542;</p>
            </div>
            <div class="check-form">
                <p>5. Makatwiran ang presyo ng piling serbisyo</p> <p class="line1"><?= $cff['rate5'] === 'Very Satisfactory' ? '/' : '' ?></p><p class="emj1">&#128515;</p> <p class="line2"><?= $cff['rate5'] === 'Satisfactory' ? '/' : '' ?></p><p class="emj2">&#128578;</p> <p class="line3"><?= $cff['rate5'] === 'Poor' ? '/' : '' ?></p><p class="emj3">&#128542;</p>
            </div>
            <div class="check-form">
                <p>6. Mapagkakatiwalaan ang serbisyo</p> <p class="line1"><?= $cff['rate6'] === 'Very Satisfactory' ? '/' : '' ?></p><p class="emj1">&#128515;</p> <p class="line2"><?= $cff['rate6'] === 'Satisfactory' ? '/' : '' ?></p><p class="emj2">&#128578;</p> <p class="line3"><?= $cff['rate6'] === 'Poor' ? '/' : '' ?></p><p class="emj3">&#128542;</p>
            </div>
            <div class="check-form">
                <p>7. Magalang at tapat na serbisyo</p> <p class="line1"><?= $cff['rate7'] === 'Very Satisfactory' ? '/' : '' ?></p><p class="emj1">&#128515;</p> <p class="line2"><?= $cff['rate7'] === 'Satisfactory' ? '/' : '' ?></p><p class="emj2">&#128578;</p> <p class="line3"><?= $cff['rate7'] === 'Poor' ? '/' : '' ?></p><p class="emj3">&#128542;</p>
            </div>
            <div class="check-form">
                <p>8. Abot ang lahat ng serbisyo</p><p class="line1"> <?= $cff['rate8'] === 'Very Satisfactory' ? '/' : '' ?></p><p class="emj1">&#128515;</p> <p class="line2"><?= $cff['rate8'] === 'Satisfactory' ? '/' : '' ?></p><p class="emj2">&#128578;</p> <p class="line3"><?= $cff['rate8'] === 'Poor' ? '/' : '' ?></p><p class="emj3">&#128542;</p>
            </div>
            <div class="check-form last">
                <p>Kabuuang antas ng kasiyahan sa serbisyong natangap</p> <p class="line1"><?= $cff['rate9'] === 'Very Satisfactory' ? '/' : '' ?></p><p class="emj1">&#128515;</p>
            </div>
            <div class="check-form last">
                <p>Irerekumenda nyo po ba ang TESDA sa inyong kamag-anak at kaibigan?</p> <p class="emj4">Oo(Yes)</p><p class="line4"><?= $cff['rate10'] === 'Yes' ? '/' : '' ?></p><p class="emj5">Hindi(No)</p><p class="line5"><?= $cff['rate10'] === 'No' ? '/' : '' ?></p>
            </div>
            <p class="comment-note">Mahalaga po saamin ang inyong suhestyon. Pakisulat po sa mga patlang.</p>
            <p class="comment"><?= $cff['comment'] ?></p>
            <li>Ang mga impormasyon na aking inilahad sa form na ito ay tama at totoo. Boluntaryo kong pinagkakaloob ang mga hinihinging impormasyon ng form na ito. Pinapayagan ko ang TESDA na isama sa kanilang database bilang bahagi ng kanilang records at monitoring ang mga detalying ito.</li>
            <div class="lagda">
                <img src="../signatures/<?= $cff['signature'] ?>" alt="">
            </div>
        </div>
            <p class="thanks">MARAMING SALAMAT PO!</p>
    </div>
    </div>
    <script>
        const printDiv = (divName) => {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
</body>
</html>