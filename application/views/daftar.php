<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Josefin+Sans:wght@200&family=Parisienne&family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css')?>">
    <link rel="icon" href="assets/images/logo.png">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
</head>

<body style="background: linear-gradient(90deg, #413f42 50%, #000 50%);">
    <div class="cont">
    
    <form action="<?= base_url('user/login') ?>" method="post">
        <div class="form sign-in" style="background: #413f42;">
            <h2>LOGIN</h2>
            <label>
                <span>Username</span>
                <input type="text" name="username">
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password">
            </label>
            <a style="text-decoration:none"><button class="submit" type="button">SIGN IN</button></a>
        </div>
    </form>

        <div class="sub-cont" style="background-color: #2b2b2b">
            <div class="img">
                <div class="img-text m-up">
                    <h2>DAFTAR</h2>
                    <p>Silahkan SIGN UP untuk mendaftar akun
                    </p>
                </div>
                <div class="img-text m-in">
                    <h2>MASUK</h2>
                    <p>Sudah punya akun ? pencet login disini</p>
                </div>
                <div class="img-btn">
                    <span class="m-up">Sign Up</span>
                    <span class="m-in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up" style="background: #000">
            <form action="<?= base_url('user/daftar') ?>" method="post">
                <h2>SIGN UP</h2>
                <label>
                    <span>Nama Lengkap</span>
                    <input type="text" name="nama_user">
                </label>
                <label>
                    <span>Username</span>
                    <input type="text"  name="username">
                </label>
                <label>
                    <span>Password</span>
                    <input type="password"  name="password">
                </label>
            </form>
                <a style="text-decoration: none;"><button type="submit" class="submit">
                    SIGN UP
                </button></a>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/script-login.js"></script>
</body>

</html>