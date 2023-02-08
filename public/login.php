<?php
require_once '../config/fungsi.php';
require_once 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            <div class="col-5 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Login Form</h5>
                        <hr>
                        <form action="ceklogin.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label" for="">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Masukan Username" required autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukan Password" required autocomplete="off">
                            </div>
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>