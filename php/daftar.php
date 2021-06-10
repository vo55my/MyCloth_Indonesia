<?php
session_start();

require 'functions.php';

if (isset($_POST['daftar'])) {
    if (daftar($_POST) > 0) {
        echo "<script>
                alert('Member baru berhasil ditambahkan, Silahkan Login');
                document.location.href = 'login.php';
              </script>";
    } else {
        echo "Member gagal ditambahkan";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/Slide/Logo.png">
    <title>MyCloth Daftar</title>
</head>

<body>
    <!-- navbar -->
    <div class="navbar-fixed">
        <nav class="black">
            <div class="container">
                <div class="nav-wrapper">
                    <img class="brand-logo" src="../assets/img/Slide/logo.png">
                </div>
            </div>
        </nav>
    </div>

    <!-- form daftar -->
    <form action="" method="post">
        <div class="row formulir">
            <div class="col s12 m4 offset-m4">
                <div class="card">
                    <div class="card-action">
                        <h3 class="center-align">Daftar</h3>
                    </div>
                    <div class="card-content">
                        <div class="input-field">
                            <i class="material-icons prefix">person</i>
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" required autocomplete="off" autofocus>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">assignment_ind</i>
                            <label for="status">Status</label>
                            <input type="text" name="status" required autocomplete="off">
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <label for="username">Username</label>
                            <input type="text" name="username" required autocomplete="off">
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <label for="password">Password</label>
                            <input type="password" name="password" required autocomplete="off">
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">lock_outline</i>
                            <label for="confirm">Konfirmasi Password</label>
                            <input type="password" name="confirm" required autocomplete="off">
                        </div>
                        <div class="input-field">
                            <button type="submit" name="daftar" class="btn-small waves-effect waves-dark red">Daftar</button>
                            <button type="submit" class="btn-small waves-effect waves-dark red">
                                <a class="white-text" href="login.php">Kembali</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- footer -->
    <footer class="footer red darken-2 white-text center-align">
        <p>Copyright © 2020 MyCloth Indonesia</p>
    </footer>

    <div class="clear"></div>

    <!-- javascript -->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>