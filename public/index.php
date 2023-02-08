<?php
session_start();
require_once '../config/fungsi.php';
require_once 'config/koneksi.php';

if (empty($_SESSION['ti3b_username'])) {
    echo "<script>
            window.location.href = 'login.php';
        </script>";
} else {

    $user = $_SESSION['ti3b_username'];
    $level = $_SESSION['ti3b_level'];

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <style>
            body {
                background-color: aliceblue;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row mt-3 mb-3">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"><i class="bi bi-braces"></i> WEB2TI3B</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <?php if ($level == "Admin") : ?>
                                        <a class="nav-link" href="index.php"><i class="bi bi-house-door"></i> Home</a>
                                        <a class="nav-link" href="index.php?page=about"> About</a>
                                        <a class="nav-link" href="index.php?page=galeri">Galeri</a>
                                        <a class="nav-link" href="index.php?page=mahasiswa">Mahasiswa</a>
                                        <a class="nav-link" href="index.php?page=user">User</a>
                                        <a class="nav-link" href="index.php?page=kontak"><i class="bi bi-envelope"></i> Contact</a>
                                    <?php else : ?>
                                        <a class="nav-link" href="index.php"><i class="bi bi-house-door"></i> Home</a>
                                        <a class="nav-link" href="index.php?page=about"> About</a>
                                        <a class="nav-link" href="index.php?page=galeri">Galeri</a>
                                        <a class="nav-link" href="index.php?page=kontak"><i class="bi bi-envelope"></i> Contact</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="d-flex" role="search">
                                <div class="dropdown">
                                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-person"></i> <?= $user ?>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="index.php?page=profil">Profil Saya</a></li>
                                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- konten -->
            <?php
            $dir = "content";
            $page = @$_GET['page'];
            if (empty($page)) {
                include 'content/home.php';
            } else {
                $scan = scanFile($dir, $page);
                if ($scan === 1) {
                    include "content/$page.php";
                } else {
                    include "content/404.php";
                }
            }
            ?>
            <!-- konten -->
        </div>


        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
<?php } ?>