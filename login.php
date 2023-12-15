<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="favicon.ico" />

    <title>PROGRAM NISA</title>
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet" />
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>
 <style type="text/css">
        body {
            background: url('1.jpg') !important;
            background-size: cover !important;
        }
    </style>
<!-- <body class="bg-info h-100"> -->
    <body class="">
    <div class="container d-flex h-100">
        <div class="row align-items-center w-100">
            <div class="col-md-4 mx-auto">
                <form method="POST" action="?m=login">
                    <div class="card ">
                        <div class="card-header">
                            <center><strong>Silakan Login Untuk Masuk Ke Aplikasi<br><br> <img src="balita.jpg"></strong></center><br>
                        </div>
                        <div class="card-body">
                            <?= show_msg() ?>
                            <?php if ($_POST) include 'aksi.php' ?>
                            <div class="mb-3">
                              Isikan Username:  <input class="form-control" type="text" placeholder="Username" name="user" focus />
                            </div>
                            <div>
                               Isikan Password:  <input class="form-control" type="password" placeholder="Password" name="pass" />
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary"><span class=""></span> Enter</button>
                            <a class="btn btn-info float-end" href=""><i class=""></i> Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>