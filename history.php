<?php
require 'function.php';

session_start();
// cek session sebelum masuk ke halaman ini
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$id_data_user = $_SESSION["id_akun_user"];
$result = query("SELECT * FROM data_user WHERE id_data_user = '$id_data_user' ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/image/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->

    <style>
        * {
            transition: background-color 1s;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        body {
            height: 100vh;
            background-color: #fff;
        }

        body.dark-theme {
            background-color: #202945;
        }

        .card.dark-theme {
            background-color: #374368;
            color: #d4d4d4;
        }

        li {
            list-style: none;
            margin: 20px 0 20px 0;
        }

        a {
            text-decoration: none;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            margin-left: -300px;
            transition: 0.4s;
        }

        .active-main-content {
            margin-left: 250px;
        }

        .active-sidebar {
            margin-left: 0;
        }

        #main-content {
            transition: 0.4s;
        }
    </style>
    <title>Gizi Buruk</title>
</head>

<body>
    <div>
        <div class="sidebar p-4 bg-primary" id="sidebar">
            <h4 class="mb-5 text-white" style="font-weight: bold;">Gizi Buruk</h4>
            <li>
                <a class="text-white" href="sidebar.php" aria-hidden="true" style="font-weight: bold;">
                    <i class="bi bi-house mr-2"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a class="text-white" href="#" style="font-weight: bold;">
                    <i class="bi bi-fire mr-2"></i>
                    Media
                </a>
            </li>
            <li>
                <a class="text-white" href="#" style="font-weight: bold;">
                    <i class="bi bi-fire mr-2"></i>
                    History
                </a>
            </li><br><br><br><br><br><br><br><br><br><br><br>
            <ul class="navbar-nav ms-auto">
                <img src="assets/image/avatar/avatar-illustrated-01.webp" class="rounded-circle mb-3" style="width: 50px; color:black;" alt="Avatar" />
                <h5 class="mb-2" style="color:#fff"><strong><?= $_SESSION["username"]; ?></strong></h5>
            </ul>
        </div>
    </div>
    <div class="p-4" id="main-content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="btn" id="button-toggle">
                <i class="bi bi-list"></i><img src="assets/image/tombol.png" alt="" style="width: 25px;">
            </button>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <h2 style="text-decoration: solid; font-weight:bold">Cek Gizi Buruk</h2>
                </li>&nbsp;&nbsp;&nbsp;
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/image/avatar/avatar-illustrated-01.webp" class="rounded-circle" height="40" alt="Avatar" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="history.php">Hystory</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- <button role="button" class="theme-switcher gray-circle-btn" type="button" id="theme_toggle"> <span class="sr-only">Switch theme</span>
            <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
            <i class="moon-icon" data-feather="moon" aria-hidden="true"></i></button>
        <div class="card mt-5"> -->
        <div class="card-body">
            <button class="btn btn-primary btn-block mb-4"><a href="sidebar.php" style="color: #fff;">Kembali</a></button><br>
            <div class="card-header">
                <h2 class="main-title">History Gizi </h2>
            </div>
            <table class="table table-borderless">
                <tr>
                    <th>No</th>
                    <th>Ayah</th>
                    <th>Ibu</th>
                    <th>Anak</th>
                    <th>Tinggi</th>
                    <th>Berat</th>
                    <th>Jenis kelamin</th>
                    <th>Waktu</th>
                    <th>Keterangan</th>
                </tr>
                <?php $nomor = 1; ?>
                <?php foreach ($result as $data_users) : ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $data_users["nama_ayah"]; ?></td>
                        <td><?= $data_users["nama_ibu"]; ?></td>
                        <td><?= $data_users["nama_anak"]; ?></td>
                        <td><?= $data_users["tinggi_badan_anak"]; ?> cm</td>
                        <td><?= $data_users["berat_badan_anak"]; ?> kg</td>
                        <td><?= $data_users["jenis_kelamin_anak"]; ?></td>
                        <td><?= $data_users["waktu"]; ?></td>
                        <td><?= $data_users["keterangan"]; ?></td>
                    </tr>
                    <?php $nomor++; ?>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Gizi Buruk</h5>
                <p class="card-text">Ayo cek Gizi mu.</p>
                <a href="sidebar.php" class="btn btn-primary">Cek lagi....</a>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
        // event will be executed when the toggle-button is clicked
        document.getElementById("button-toggle").addEventListener("click", () => {

            // when the button-toggle is clicked, it will add/remove the active-sidebar class
            document.getElementById("sidebar").classList.toggle("active-sidebar");

            // when the button-toggle is clicked, it will add/remove the active-main-content class
            document.getElementById("main-content").classList.toggle("active-main-content");
        });
        $(document).ready(function() {
            $('#theme_toggle').on('click', function() {
                if ($('body').hasClass('dark-theme')) {
                    $(this).toggleClass('btn-light');
                    $(this).addClass('btn-dark');
                    $('h1').html("Light Mode");
                    $('body').toggleClass('dark-theme');
                    $('.card').toggleClass('dark-theme');
                    localStorage.setItem("mode", "light-theme");
                } else {
                    $(this).toggleClass('btn-light');
                    $(this).removeClass('btn-dark');
                    $('h1').html("Dark Mode");
                    $('body').toggleClass('dark-theme');
                    $('.card').toggleClass('dark-theme');
                    localStorage.setItem("mode", "dark-theme");
                }
            })
            //check for localStorage, add as browser preference if missing
            if (!localStorage.getItem("mode")) {
                if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
                    localStorage.setItem("mode", "dark-theme");
                } else {
                    localStorage.setItem("mode", "light-theme");
                }
            }
            //set interface to match localStorage
            if (localStorage.getItem("mode") == "dark-theme") {
                $('#theme_toggle').removeClass('btn-dark');
                $('#theme_toggle').addClass('btn-light');
                $('body').addClass('dark-theme');
                $('.card').addClass('dark-theme');
                $('h1').html("Dark Mode");
                document.getElementById("theme_toggle").checked = true;
            } else {
                $('#theme_toggle').addClass('btn-dark');
                $('#theme_toggle').removeClass('btn-light');
                $('body').removeClass('dark-theme');
                $('.card').removeClass('dark-theme');
                $('h1').html("Light Mode");
                document.getElementById("theme_toggle").checked = false;
            };
        });
    </script>
</body>

</html>