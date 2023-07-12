<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CFF Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>

    <div class="login-page">
        <?php if(isset($_SESSION['login-message'])): ?>
            <div class="alert" id="alert">
                <?= $_SESSION['login-message']; ?>
                <?= 
                    "<script>
                        setTimeout(()=> {document.getElementById('alert').style.display = 'none'}, 3000 )
                    </script>"
                ?>
            </div>
            <?php unset($_SESSION['login-message']); ?>
        <?php endif ?>
        <form action="./methods/login.php" method="post">
            <h2>ADMIN - Login</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="uname" placeholder="enter your username">
            </div>
            <div class="form-group">
                <label for="username">Password</label>
                <input type="password" name="pwd" placeholder="enter your password">
            </div>
            <button>Login</button>
        </form>
    </div>

</body>
</html>