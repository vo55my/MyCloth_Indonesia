<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
    exit;
}

require 'functions.php';

if (!isset($_GET['id'])) {
    header("Location: admin.php");
    exit;
}

$id = $_GET['id'];

$bike = query("SELECT * FROM bike_edition WHERE id = $id");
$black = query("SELECT * FROM black_edition WHERE id = $id");
$white = query("SELECT * FROM white_edition WHERE id = $id");
$games = query("SELECT * FROM games_edition WHERE id = $id");
$indo = query("SELECT * FROM indo_edition WHERE id = $id");
$pubg = query("SELECT * FROM pubg_edition WHERE id = $id");
$space = query("SELECT * FROM space_edition WHERE id = $id");

if (isset($_POST['update'])) {
    if (update($_POST) > 0) {
        echo "<script>
            alert('Katalog berhasil diupdate')
            document.location.href = 'admin.php';
          </script>";
    } else {
        echo "<script>
            alert('Katalog gagal diupdate')
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
    <title>MyCloth Update</title>
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

    <!-- form update -->
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $query['id']; ?>">
        <div class="row formulir">
            <div class="col s12 m4 offset-m4">
                <div class="card">
                    <div class="card-action">
                        <h3 class="center-align">Update Katalog</h3>
                    </div>
                    <div class="card-content">
                        <div class="input-field">
                            <label for="kode">Kode Baju</label>
                            <input type="text" name="kode" required autocomplete="off" autofocus value="<?= $query['kode']; ?>">
                        </div>
                        <div class="input-field">
                            <label for="edisi">Edisi</label>
                            <input type="text" name="edisi" required autocomplete="off" value="<?= $query['edisi']; ?>">
                        </div>
                        <div class="input-field">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" required autocomplete="off" value="<?= $query['harga']; ?>">
                        </div>
                        <div class="input-field">
                            <label for="ukuran">Ukuran</label>
                            <input type="text" name="ukuran" required autocomplete="off" value="<?= $query['ukuran']; ?>">
                        </div>
                        <div class="file-field input-field">
                            <div class="btn-small waves-effect waves-dark red">
                                <i class="material-icons">file_upload</i>
                                <input type="file" name="img">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="img" value="<?= $query['img']; ?>">
                            </div>
                        </div>
                        <div class="input-field">
                            <button type="submit" name="update" class="btn-small waves-effect waves-dark red">Update</button>
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