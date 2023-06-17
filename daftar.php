<?php
require 'function.php';

if (isset($_POST["submit_registrasi"])) {

    $email = $_POST["email"];
    // cek email apakah sesuai format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "
                <script>
                    alert('Format email anda salah');
                    window.location.href = 'daftar.php';
                </script>
                ";
        exit;
    }
    if (registrasi($_POST) > 0) {
        echo "
                <script>
                    alert('User baru berhasil di tambahkan');
                    window.location.href = 'login.php';
                </script>
            ";
    } else {
        echo "
            <script>
                alert('User baru gagal di tambahkan');
                window.location.href = 'daftar.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css-1/style.min.css">
    <title>Daftar Akun</title>
</head>

<body>
    <div class="layer"></div>
    <main class="page-center">
        <article class="sign-up">
            <h1 class="sign-up__title">Daftar</h1>
            <p class="sign-up__subtitle">Cek Gizi mulai dari sini</p>
            <form class="sign-up-form form" action="" method="POST">
                <label class="form-label-wrapper">
                    <p class="form-label">Username</p>
                    <input class="form-input" type="text" placeholder="Masukkan Username " required name="username">
                </label>
                <label class="form-label-wrapper">
                    <p class="form-label">Email</p>
                    <input class="form-input" type="email" placeholder="Masukkan Email" required name="email">
                </label>
                <label class="form-label-wrapper">
                    <p class="form-label">Password</p>
                    <input class="form-input" type="password" placeholder="Masukkan password" required name="password">
                </label>
                <label class="form-label-wrapper">
                    <p class="form-label">Konfirmasi Password</p>
                    <input class="form-input" type="password" placeholder="Ulangi password" required name="password2">
                </label>
                <a class="link-info forget-link" href="login.php">Sudah punya akun</a>
                <label class="form-checkbox-wrapper">
                    <input class="form-checkbox" type="checkbox" required>
                    <span class="form-checkbox-label">Remember me next time</span>
                </label>
                <button class="form-btn primary-default-btn transparent-btn" name="submit_registrasi">Sign in</button>
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