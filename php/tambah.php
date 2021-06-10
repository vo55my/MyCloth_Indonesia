<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
    exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Katalog berhasil ditambahkan');
            document.location.href = 'admin.php';
          </script>";
    } else {
        echo "<script>
            alert('Katalog gagal ditambahkan');
            document.location.href = 'admin.php';
          </script>";
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
    <title>MyCloth Tambah</title>
    <style>
        .ukuran p {
            color: maroon;
        }

        ::placeholder {
            color: maroon;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <div class="navbar-fixed">
        <nav class="black">
            <div class="container">
                <div class="nav-wrapper">
                    <img class="brand-logo" src="../assets/img/Slide/Logo.png">
                </div>
            </div>
        </nav>
    </div>

    <!-- form tambah -->
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row formulir">
            <div class="col s12 m4 offset-m4">
                <div class="card">
                    <div class="card-action">
                        <h3 class="center-align">Tambah Katalog</h3>
                    </div>
                    <div class="card-content">
                        <div class="input-field">
                            <label for="kode">Kode Baju</label>
                            <input type="text" name="kode" required autocomplete="off" autofocus>
                        </div>
                        <div class="input-field">
                            <label for="edisi">Edisi</label>
                            <input type="text" name="edisi" required autocomplete="off">
                        </div>
                        <div class="input-field">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" required autocomplete="off">
                        </div>
                        <div class="input-field">
                            <label for="ukuran">Ukuran</label>
                            <input type="text" name="ukuran" required autocomplete="off">
                        </div>

                        <div class="file-field input-field">
                            <div class="btn-small waves-effect waves-dark red">
                                <i class="material-icons">file_upload</i>
                                <input type="file" name="img">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="img">
                            </div>
                        </div>
                        <div class="input-field">
                            <button type="submit" name="tambah" class="btn-small waves-effect waves-dark red">Tambah</button>
                            <button type="submit" class="btn-small waves-effect waves-dark red">
                                <a class="white-text" href="admin.php">Kembali</a>
                            </button>
                        </div>
                    </div>
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