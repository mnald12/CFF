<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CFF</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/index.css?v=<?= time() ?>">
</head>

<body>

    <?php if(isset($_SESSION['save-message'])): ?>
        <div class="alert" id="alert">
            <?= $_SESSION['save-message']; ?>
            <?= 
                "<script>
                    setTimeout(()=> {document.getElementById('alert').style.display = 'none'}, 3000 )
                </script>"
            ?>
        </div>
        <?php unset($_SESSION['save-message']); ?>
    <?php endif ?>

    <div class="brand-header">
        <h1><img src="./images/tsd.jpg" alt="logo"> TESDA SORSOGON PROVINCIAL OFFICE</h1>
    </div>
    <div class="cff-form">
        <div class="cff-header">
            <h2>Customer Feedback Form</h2>
        </div>
        <form action="./methods/save.php" method="post" enctype="multipart/form-data">
            <div class="input-form">
                <label for="name">Pangalan</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="input-form">
                <label for="age">Edad</label>
                <input type="text" name="age" id="age" required>
            </div>
            <div class="input-form full">
                <label for="address">Tirahan / tangapan</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div class="input-form">
                <label for="sex">Kasarian</label>
                <select name="sex" id="sex" required>
                    <option value="male">Lalaki</option>
                    <option value="female">Babae</option>
                </select>
            </div>
            <div class="input-form">
                <label for="por">Purpose of Visit</label>
                <input type="text" name="purpose" id="por" required>
            </div>
            <div class="input-form">
                <label for="cp">Telepono/CP#</label>
                <input type="text" name="cp" id="cp">
            </div>
            <div class="input-form">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>

            <input id="rate1" type="text" value="Very Satisfactory" name="rate1" hidden>
            <input id="rate2" type="text" value="Very Satisfactory" name="rate2" hidden>
            <input id="rate3" type="text" value="Very Satisfactory" name="rate3" hidden>
            <input id="rate4" type="text" value="Very Satisfactory" name="rate4" hidden>
            <input id="rate5" type="text" value="Very Satisfactory" name="rate5" hidden>
            <input id="rate6" type="text" value="Very Satisfactory" name="rate6" hidden>
            <input id="rate7" type="text" value="Very Satisfactory" name="rate7" hidden>
            <input id="rate8" type="text" value="Very Satisfactory" name="rate8" hidden>
            <input id="rate9" type="text" value="Very Satisfactory" name="rate9" hidden>
            <input id="rate10" type="text" value="Yes" name="rate10" hidden>

            <h3 class="heading">Lagyan ng check ang box ayon sa antas ng serbisyong iyong natangap.</h3>
            <div class="check-form">
                <p>1. Mabilis na serbisyo</p>
                <label class="l3" for="c1">&#128515;</label>
                <input class="i3" type="checkbox" id="c1">
                <label class="l2" for="c2">&#128578;</label>
                <input class="i2" type="checkbox" id="c2">
                <label class="l1" for="c3">&#128542;</label>
                <input class="i1" type="checkbox" id="c3">
            </div>
            <div class="check-form">
                <p>2. Mahusay na serbisyo</p>
                <label class="l3" for="c4">&#128515;</label>
                <input class="i3" type="checkbox" id="c4">
                <label class="l2" for="c5">&#128578;</label>
                <input class="i2" type="checkbox" id="c5">
                <label class="l1" for="c6">&#128542;</label>
                <input class="i1" type="checkbox" id="c6">
            </div>
            <div class="check-form">
                <p>3. Malinis at maayos na tangapan</p>
                <label class="l3" for="c7">&#128515;</label>
                <input class="i3" type="checkbox" id="c7">
                <label class="l2" for="c8">&#128578;</label>
                <input class="i2" type="checkbox" id="c8">
                <label class="l1" for="c9">&#128542;</label>
                <input class="i1" type="checkbox" id="c9">
            </div>
            <div class="check-form">
                <p>4. May malasakit at nauunawaan ang serbisyo</p>
                <label class="l3" for="c10">&#128515;</label>
                <input class="i3" type="checkbox" id="c10">
                <label class="l2" for="c11">&#128578;</label>
                <input class="i2" type="checkbox" id="c11">
                <label class="l1" for="c12">&#128542;</label>
                <input class="i1" type="checkbox" id="c12">
            </div>
            <div class="check-form">
                <p>5. Makatwiran ang presyo ng piling serbisyo</p>
                <label class="l3" for="c13">&#128515;</label>
                <input class="i3" type="checkbox" id="c13">
                <label class="l2" for="c14">&#128578;</label>
                <input class="i2" type="checkbox" id="c14">
                <label class="l1" for="c15">&#128542;</label>
                <input class="i1" type="checkbox" id="c15">
            </div>
            <div class="check-form">
                <p>6. Mapagkakatiwalaan ang serbisyo</p>
                <label class="l3" for="c16">&#128515;</label>
                <input class="i3" type="checkbox" id="c16">
                <label class="l2" for="c17">&#128578;</label>
                <input class="i2" type="checkbox" id="c17">
                <label class="l1" for="c18">&#128542;</label>
                <input class="i1" type="checkbox" id="c18">
            </div>
            <div class="check-form">
                <p>7. Magalang at tapat na serbisyo.</p>
                <label class="l3" for="c19">&#128515;</label>
                <input class="i3" type="checkbox" id="c19">
                <label class="l2" for="c20">&#128578;</label>
                <input class="i2" type="checkbox" id="c20">
                <label class="l1" for="c21">&#128542;</label>
                <input class="i1" type="checkbox" id="c21">
            </div>
            <div class="check-form">
                <p>8. Abot ang lahat ng serbisyo ng TESDA.</p>
                <label class="l3" for="c22">&#128515;</label>
                <input class="i3" type="checkbox" id="c22">
                <label class="l2" for="c23">&#128578;</label>
                <input class="i2" type="checkbox" id="c23">
                <label class="l1" for="c24">&#128542;</label>
                <input class="i1" type="checkbox" id="c24">
            </div>
            <div class="check-forms">
                <p>Kabuuang antas ng kasiyahan sa serbisyong natangap.</p>
                <label class="l3" for="c25">&#128515;</label>
                <input class="i3" type="checkbox" id="c25">
            </div>
            <div class="check-forms">
                <p>Irerekumenda nyo po ba ang tesda sa inyong kamag-anak at kaibigan</p>
                <label class="l3" for="c26">Yes</label>
                <input class="i3" type="checkbox" id="c26">
                <label class="l2" for="c27">No</label>
                <input class="i2" type="checkbox" id="c27">
            </div>
            <div class="text-box">
                <h3>Mahalaga po samin ang inyong suhestyon. pakisulat po sa ibaba</h3>
                <textarea name="comment"></textarea>
            </div>
            <p class="data-privacy"> <input type="checkbox" id="privacy"> <label for="privacy"> Ang mga impormasyon na
                    aking inilahad sa form na ito ay tama at totoo. Boluntaryo kong pinagkakaloob ang mga hinihinging
                    impormasyon ng form na ito. Pinapayagan ko ang TESDA na isama sa kanilang database bilang bahagi ng
                    kanilang records at monitoring ang mga detalying ito.</label></p>
            <div class="lagda">
                <div class="lagda-here" id="lagda">
                    <input name="sign" type="file" id="file" onchange="c(event)">
                </div>
            </div>
            <div class="buttons">
                <button id="btn" disabled>Submit</button>
            </div>
        </form>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>