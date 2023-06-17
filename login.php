<?php
require 'function.php';
// Session harus dimulai di awal code
session_start();
// cek cookie
remember_me();
// Jika sudah login, redirect ke index.php
if (isset($_SESSION['login'])) {
    header("Location: sidebar.php");
    exit;
}
// cek input
if (isset($_POST['submit_login'])) {
    $result = login($_POST);
    if ($result === true) {
        header("Location: sidebar.php");
        exit;
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Dashboard | Sign In</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css-1/style.min.css">
</head>

<body>
    <div class="layer"></div>
    <main class="page-center">
        <article class="sign-up">
            <h1 class="sign-up__title">Selamat Datang !</h1>
            <p class="sign-up__subtitle">Masuk untuk lanjut</p>
            <form class="sign-up-form form" action="" method="POST">
                <label class="form-label-wrapper">
                    <p class="form-label">Username</p>
                    <input class="form-input" type="text" placeholder="Masukkan Username " required name="username">
                </label>
                <label class="form-label-wrapper">
                    <p class="form-label">Email</p>
                    <input class="form-input" type="email" placeholder="Masukkan email" required name="email">
                </label>
                <label class="form-label-wrapper">
                    <p class="form-label">Password</p>
                    <input class="form-input" type="password" placeholder="Masukkan password" required name="password">
                </label>
                <a class="link-info forget-link" href="forgot_password.php">Lupa Password ??</a><br>
                <a class="link-info forget-link" href="daftar.php">Belum Punya Akun ??</a>
                <label class="form-checkbox-wrapper">
                    <input class="form-checkbox" type="checkbox" required name="remember_me">
                    <span class="form-checkbox-label">Remember me next time</span>
                </label>
                <button class="form-btn primary-default-btn transparent-btn" type="submit" name="submit_login">Sign in</button>
            </form>
        </article>
    </main>
    <!-- Chart library -->
    <script src="./plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="js/script.js"></script>

</body>

</html>