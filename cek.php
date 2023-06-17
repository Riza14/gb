<?php
require 'gizi.php';
require 'function.php';

session_start();
// cek session sebelum masuk ke halaman ini
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST["submit_cek"])) {
    if (tambah($_POST) > 0) {
        $hasil = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gizi Buruk | Cek Gizi Buruk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/image/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css-1/style.min.css">
</head>

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-start">
                <div class="sidebar-head">
                    <a href="/" class="logo-wrapper" title="Home">
                        <span class="sr-only">Home</span>
                        <span class="icon logo" aria-hidden="true"></span>
                        <div class="logo-text">
                            <span class="logo-title">Gizi Buruk</span>
                            <span class="logo-subtitle">Dashboard</span>
                        </div>
                    </a>
                    <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                        <span class="sr-only">Toggle menu</span>
                        <span class="icon menu-toggle" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="sidebar-body">
                    <ul class="sidebar-body-menu">
                        <li>
                            <a class="active" href="#"><span class="icon home" aria-hidden="true"></span>Cek!!!</a>
                        </li>
                        <li>
                            <!-- <a class="show-cat-btn" href="##">
                                <span class="icon document" aria-hidden="true"></span>Posts
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a> -->
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="posts.html">All Posts</a>
                                </li>
                                <li>
                                    <a href="new-post.html">Add new post</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon folder" aria-hidden="true"></span>Categories
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="categories.html">All categories</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon image" aria-hidden="true"></span>Media
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="media-01.html">Contoh</a>
                                </li>
                                <!-- <li>
                                    <a href="media-02.html">Media-02</a>
                                </li> -->
                            </ul>
                        </li>
                        <!-- <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon paper" aria-hidden="true"></span>Pages
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="pages.html">All pages</a>
                                </li>
                                <li>
                                    <a href="new-page.html">Add new page</a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="sidebar-footer">
                <a href="##" class="sidebar-user">
                    <span class="sidebar-user-img">
                        <picture>
                            <source srcset="assets/image/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-01.png" alt="User name">
                        </picture>
                    </span>
                    <div class="sidebar-user-info">
                        <span class="sidebar-user__title"><?= $_SESSION["username"]; ?></span>
                    </div>
                </a>
            </div>
        </aside>
        <div class="main-wrapper">
            <!-- ! Main nav -->
            <nav class="main-nav--bg">
                <div class="container main-nav">
                    <div class="main-nav-start">
                        <!-- <div class="search-wrapper">
                            <i data-feather="search" aria-hidden="true"></i>
                            <input type="text" placeholder="Enter keywords ..." required>
                        </div> -->
                    </div>
                    <div class="main-nav-end">
                        <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                            <span class="sr-only">Toggle menu</span>
                            <span class="icon menu-toggle--gray" aria-hidden="true"></span>
                        </button>
                        <!-- <div class="lang-switcher-wrapper">
                            <button class="lang-switcher transparent-btn" type="button">
                                EN
                                <i data-feather="chevron-down" aria-hidden="true"></i>
                            </button>
                            <ul class="lang-menu dropdown">
                                <li><a href="##">English</a></li>
                                <li><a href="##">French</a></li>
                                <li><a href="##">Uzbek</a></li>
                            </ul>
                        </div> -->
                        <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                            <span class="sr-only">Switch theme</span>
                            <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                            <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
                        </button>
                        <div class="notification-wrapper">
                            <!-- <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
                                <span class="sr-only">To messages</span>
                                <span class="icon notification active" aria-hidden="true"></span>
                            </button> -->
                            <!--  -->
                        </div>
                        <div class="nav-user-wrapper">
                            <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                                <span class="sr-only">My profile History</span>
                                <span class="nav-user-img">
                                    <picture>
                                        <source srcset="assets/image/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name">
                                    </picture>
                                </span>
                            </button>
                            <ul class="users-item-dropdown nav-user-dropdown dropdown">
                                <li><a href="##">
                                        <i data-feather="user" aria-hidden="true"></i>
                                        <span><a href="history.php">Profile History</a></span>
                                    </a></li>
                                <li><a class="danger" href="##">
                                        <i data-feather="log-out" aria-hidden="true"></i>
                                        <span><a href="logout.php">Log out</span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- ! Main -->
            <main>
                <div class="container-sm">
                    <h2 class="main-title">Cek Gizi </h2>
                    <div class="container">
                        <form action="#keterangan" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label" for="input_nama_ayah">Nama Ayah</label>
                                <input class="form-control" type="text" name="input_nama_ayah" id="input_nama_ayah" autocomplete="off" placeholder="Masukan Nama Ayah" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="input_nama_ibu">Nama Ibu</label>
                                <input class="form-control" type="text" name="input_nama_ibu" id="input_nama_ibu" autocomplete="off" placeholder="Masukan Nama Ibu" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="input_nama_anak">Nama Anak</label>
                                <input class="form-control" type="text" name="input_nama_anak" id="input_nama_anak" autocomplete="off" placeholder="Masukan Nama Anak" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="input_tinggi_badan_anak">Tinggi Badan Anak</label>
                                <input class="form-control" type="text" name="input_tinggi_badan_anak" id="input_tinggi_badan_anak" autocomplete="off" placeholder="Masukan Tinggi Badan Anak" min="0" max="124" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="input_berat_badan_anak">Berat Badan Anak</label>
                                <input class="form-control" type="text" name="input_berat_badan_anak" id="input_berat_badan_anak" autocomplete="off" placeholder="Masukan Berat Badan Anak" required>
                            </div>
                            <div class="row g-2">
                                <div class="col-sm">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="input_jenis_kelamin_anak" required>
                                            <!-- <option selected>Pilih Jenis Kelamin</option> -->
                                            <option value="pria">Laki-laki</option>
                                            <option value="wanita">Perempuan</option>
                                        </select>
                                        <label for="floatingSelectGrid">Jenis Kelamin</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="input_waktu" value="<?= date("d-m-y"); ?>">
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="input_id_akun_user" value="<?= $_SESSION["id_akun_user"]; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-4" name="submit_cek">Cek sekarang</button>
                        </form>
                    </div>
                    <div class="content-output" id="keterangan">
                        <h2 class="main-title">Hasil</h2>
                        <?php if (isset($hasil)) : ?>
                            <div class="hasil">
                                <!-- varible di keterangann di sini harus di samakan dengan isi varible yang ada di file gizi_buruk.php -->
                                <?php if ($_SESSION['keterangan'] === 'Gizi buruk -3 SD' or $_SESSION['keterangan'] === 'Gizi buruk -3 sd') : ?>
                                    <div class="class-3D">
                                        <h2><?= $_SESSION['keterangan']; ?></h2>
                                    </div>
                                <?php endif; ?>
                                <?php if ($_SESSION['keterangan'] === 'Gizi buruk -2 SD' or $_SESSION['keterangan'] === 'Gizi buruk -2 sd') : ?>
                                    <div class="class-2D">
                                        <h2><?= $_SESSION['keterangan']; ?></h2>
                                    </div>
                                <?php endif; ?>
                                <?php if ($_SESSION['keterangan'] === 'Gizi buruk -1 SD' or $_SESSION['keterangan'] === 'Gizi buruk -1 sd') : ?>
                                    <div class="class-1D">
                                        <h2><?= $_SESSION['keterangan']; ?></h2>
                                    </div>
                                <?php endif; ?>
                                <?php if ($_SESSION['keterangan'] === 'normal') : ?>
                                    <div class="class-normal">
                                        <h2><?= $_SESSION['keterangan']; ?></h2>
                                    </div>
                                <?php endif; ?>
                                <?php if ($_SESSION['keterangan'] === 'Diatas +1 SD' or $_SESSION['keterangan'] === 'Diatas + 1sd') : ?>
                                    <div class="class-1D">
                                        <h2><?= $_SESSION['keterangan']; ?></h2>
                                    </div>
                                <?php endif; ?>
                                <?php if ($_SESSION['keterangan'] === 'Diatas +2 SD' or $_SESSION['keterangan'] === 'Diatas + 2sd') : ?>
                                    <div class="class-2D">
                                        <h2><?= $_SESSION['keterangan']; ?></h2>
                                    </div>
                                <?php endif; ?>
                                <?php if ($_SESSION['keterangan'] === 'Diatas +3 SD' or $_SESSION['keterangan'] === 'Diatas + 3sd') : ?>
                                    <div class="class-3D">
                                        <h2><?= $_SESSION['keterangan']; ?></h2>
                                    </div>
                                <?php endif; ?>
                                <div class="penjelasan">
                                    <br>
                                    <p><?= $_SESSION['penjelasan']; ?>
                                        Lorem, ipsum dolor sit amet consectetur
                                        adipisicing elit. Aut at quod quia repudiandae.
                                        In, possimus. Sint, deleniti quasi.
                                        In et ea aliquid nihil nostrum veniam at officia quos.
                                        Culpa, recusandae.x
                                    </p>
                                    <br>
                                    <p>APA YANG MAU DI JELASKAN DI SINI ?</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
            </main><br><br><br>
            <!-- ! Footer -->
            <footer class="footer">
                <div class="container footer--flex">
                    <div class="footer-start">
                        <p>2023 © Gizi Buruk - <a href="https://github.com/Riza14" target="_blank" rel="noopener noreferrer">https://github.com/Riza14</a></p>
                    </div>
                    <!-- <ul class="footer-end">
                        <li><a href="##">About</a></li>
                        <li><a href="##">Support</a></li>
                        <li><a href="##">Puchase</a></li>
                    </ul> -->
                </div>
            </footer>
        </div>
    </div>
    <!-- Chart library -->
    <script src="assets/plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="assets/plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="assets/js/script.js"></script>
</body>

</html>