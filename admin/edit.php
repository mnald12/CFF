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
    <title>CFF</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/styles.css?v=><?= time() ?>">
</head>

<body>
    <div class="search-box">
        <h3>Edit Customer Feedback Form</h3>
        <a class="home" href="./lists.php"><i class="fa fa-home"></i></a>
        <a class="logout" href="./methods/logout.php"><i class="fa fa-power-off"></i></a>
    </div>
    <div class="cff-form">
        <form action="./methods/update.php?id=<?= $cff['id'] ?>" method="post">
            <div class="input-form">
                <label for="name">Pangalan</label>
                <input type="text" name="name" id="name" value="<?= $cff['name'] ?>" required>
            </div>
            <div class="input-form">
                <label for="age">Edad</label>
                <input type="text" name="age" id="age" value="<?= $cff['age'] ?>" required>
            </div>
            <div class="input-form full">
                <label for="address">Tirahan / tangapan</label>
                <input type="text" name="address" id="address" value="<?= $cff['address'] ?>" required>
            </div>
            <div class="input-form">
                <label for="sex">Kasarian</label>
                <select name="sex" id="sex" required>
                    <option value="male" <?= $cff['sex'] === 'male' ? 'selected' : '' ?>>Lalaki</option>
                    <option value="female" <?= $cff['sex'] === 'female' ? 'selected' : '' ?>>Babae</option>
                </select>
            </div>
            <div class="input-form">
                <label for="por">Purpose of Visit</label>
                <input type="text" name="purpose" id="por" value="<?= $cff['purpose'] ?>" required>
            </div>
            <div class="input-form">
                <label for="cp">Telepono/CP#</label>
                <input type="text" name="cp" id="cp" value="<?= $cff['cp'] ?>">
            </div>
            <div class="input-form">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?= $cff['email'] ?>">
            </div>

            <input id="rate1" type="text" value="<?= $cff['rate1'] ?>" name="rate1" hidden>
            <input id="rate2" type="text" value="<?= $cff['rate2'] ?>" name="rate2" hidden>
            <input id="rate3" type="text" value="<?= $cff['rate3'] ?>" name="rate3" hidden>
            <input id="rate4" type="text" value="<?= $cff['rate4'] ?>" name="rate4" hidden>
            <input id="rate5" type="text" value="<?= $cff['rate5'] ?>" name="rate5" hidden>
            <input id="rate6" type="text" value="<?= $cff['rate6'] ?>" name="rate6" hidden>
            <input id="rate7" type="text" value="<?= $cff['rate7'] ?>" name="rate7" hidden>
            <input id="rate8" type="text" value="<?= $cff['rate8'] ?>" name="rate8" hidden>
            <input id="rate9" type="text" value="<?= $cff['rate9'] ?>" name="rate9" hidden>
            <input id="rate10" type="text" value="<?= $cff['rate10'] ?>" name="rate10" hidden>

            <h3 class="heading">Lagyan ng check ang box ayon sa antas ng serbisyong iyong natangap.</h3>
            <div class="check-form">
                <p>1. Mabilis na serbisyo</p>
                <label class="l3" for="c1">&#128515;</label>
                <input class="i3" type="checkbox" id="c1" <?= $cff['rate1'] === 'Very Satisfactory' ? 'checked' : '' ?>>
                <label class="l2" for="c2">&#128578;</label>
                <input class="i2" type="checkbox" id="c2" <?= $cff['rate1'] === 'Satisfactory' ? 'checked' : '' ?>>
                <label class="l1" for="c3">&#128542;</label>
                <input class="i1" type="checkbox" id="c3" <?= $cff['rate1'] === 'Poor' ? 'checked' : '' ?>>
            </div>
            <div class="check-form">
                <p>2. Mahusay na serbisyo</p>
                <label class="l3" for="c4">&#128515;</label>
                <input class="i3" type="checkbox" id="c4" <?= $cff['rate2'] === 'Very Satisfactory' ? 'checked' : '' ?>>
                <label class="l2" for="c5">&#128578;</label>
                <input class="i2" type="checkbox" id="c5"<?= $cff['rate2'] === 'Satisfactory' ? 'checked' : '' ?>>
                <label class="l1" for="c6">&#128542;</label>
                <input class="i1" type="checkbox" id="c6" <?= $cff['rate2'] === 'Poor' ? 'checked' : '' ?>>
            </div>
            <div class="check-form">
                <p>3. Malinis at maayos na tangapan</p>
                <label class="l3" for="c7">&#128515;</label>
                <input class="i3" type="checkbox" id="c7" <?= $cff['rate3'] === 'Very Satisfactory' ? 'checked' : '' ?>>
                <label class="l2" for="c8">&#128578;</label>
                <input class="i2" type="checkbox" id="c8" <?= $cff['rate3'] === 'Satisfactory' ? 'checked' : '' ?>>
                <label class="l1" for="c9">&#128542;</label>
                <input class="i1" type="checkbox" id="c9" <?= $cff['rate3'] === 'Poor' ? 'checked' : '' ?>>
            </div>
            <div class="check-form">
                <p>4. May malasakit at nauunawaan ang serbisyo</p>
                <label class="l3" for="c10">&#128515;</label>
                <input class="i3" type="checkbox" id="c10" <?= $cff['rate4'] === 'Very Satisfactory' ? 'checked' : '' ?>>
                <label class="l2" for="c11">&#128578;</label>
                <input class="i2" type="checkbox" id="c11" <?= $cff['rate4'] === 'Satisfactory' ? 'checked' : '' ?>>
                <label class="l1" for="c12">&#128542;</label>
                <input class="i1" type="checkbox" id="c12" <?= $cff['rate4'] === 'Poor' ? 'checked' : '' ?>>
            </div>
            <div class="check-form">
                <p>5. Makatwiran ang presyo ng piling serbisyo</p>
                <label class="l3" for="c13">&#128515;</label>
                <input class="i3" type="checkbox" id="c13" <?= $cff['rate5'] === 'Very Satisfactory' ? 'checked' : '' ?>>
                <label class="l2" for="c14">&#128578;</label>
                <input class="i2" type="checkbox" id="c14" <?= $cff['rate5'] === 'Satisfactory' ? 'checked' : '' ?>>
                <label class="l1" for="c15">&#128542;</label>
                <input class="i1" type="checkbox" id="c15" <?= $cff['rate5'] === 'Poor' ? 'checked' : '' ?>>
            </div>
            <div class="check-form">
                <p>6. Mapagkakatiwalaan ang serbisyo</p>
                <label class="l3" for="c16">&#128515;</label>
                <input class="i3" type="checkbox" id="c16" <?= $cff['rate6'] === 'Very Satisfactory' ? 'checked' : '' ?>>
                <label class="l2" for="c17">&#128578;</label>
                <input class="i2" type="checkbox" id="c17" <?= $cff['rate6'] === 'Satisfactory' ? 'checked' : '' ?>>
                <label class="l1" for="c18">&#128542;</label>
                <input class="i1" type="checkbox" id="c18" <?= $cff['rate6'] === 'Poor' ? 'checked' : '' ?>>
            </div>
            <div class="check-form">
                <p>7. Magalang at tapat na serbisyo.</p>
                <label class="l3" for="c19">&#128515;</label>
                <input class="i3" type="checkbox" id="c19" <?= $cff['rate7'] === 'Very Satisfactory' ? 'checked' : '' ?>>
                <label class="l2" for="c20">&#128578;</label>
                <input class="i2" type="checkbox" id="c20" <?= $cff['rate7'] === 'Satisfactory' ? 'checked' : '' ?>>
                <label class="l1" for="c21">&#128542;</label>
                <input class="i1" type="checkbox" id="c21" <?= $cff['rate7'] === 'Poor' ? 'checked' : '' ?>>
            </div>
            <div class="check-form">
                <p>8. Abot ang lahat ng serbisyo ng TESDA.</p>
                <label class="l3" for="c22">&#128515;</label>
                <input class="i3" type="checkbox" id="c22" <?= $cff['rate8'] === 'Very Satisfactory' ? 'checked' : '' ?>>
                <label class="l2" for="c23">&#128578;</label>
                <input class="i2" type="checkbox" id="c23" <?= $cff['rate8'] === 'Satisfactory' ? 'checked' : '' ?>>
                <label class="l1" for="c24">&#128542;</label>
                <input class="i1" type="checkbox" id="c24" <?= $cff['rate8'] === 'Poor' ? 'checked' : '' ?>>
            </div>
            <div class="check-forms">
                <p>Kabuuang antas ng kasiyahan sa serbisyong natangap.</p>
                <label class="l3" for="c25">&#128515;</label>
                <input class="i3" type="checkbox" id="c25" <?= $cff['rate9'] === 'Very Satisfactory' ? 'checked' : '' ?>>
            </div>
            <div class="check-forms">
                <p>Irerekumenda nyo po ba ang tesda sa inyong kamag-anak at kaibigan</p>
                <label class="l3" for="c26">Yes</label>
                <input class="i3" type="checkbox" id="c26" <?= $cff['rate10'] === 'Yes' ? 'checked' : '' ?>>
                <label class="l2" for="c27">No</label>
                <input class="i2" type="checkbox" id="c27" <?= $cff['rate10'] === 'No' ? 'checked' : '' ?>>
            </div>
            <div class="text-box">
                <h3>Mahalaga po samin ang inyong suhestyon. pakisulat po sa ibaba</h3>
                <textarea name="comment"><?= $cff['comment'] ?></textarea>
            </div>
            <div class="buttons">
                <button>Save Changes</button>
            </div>
        </form>
    </div>

    <script src="./js/script.js?v=<?= time() ?>"></script>

</body>

</html>