<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
    exit;
}

require 'functions.php';

$bike = query("SELECT * FROM bike_edition");
$black = query("SELECT * FROM black_edition");
$white = query("SELECT * FROM white_edition");
$games = query("SELECT * FROM games_edition");
$indo = query("SELECT * FROM indo_edition");
$pubg = query("SELECT * FROM pubg_edition");
$space = query("SELECT * FROM space_edition");
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
    <title>MyCloth Admin</title>
    <style>
        .dropdown-content li a {
            color: maroon;
        }

        .caption nav {
            background: rgba(0, 0, 0, 0.2);
        }

        .nav-wrapper form {
            margin-top: 40px;
        }

        .container h2 {
            margin-bottom: 40px;
            font-weight: 600;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .col img {
            margin-bottom: 40px;
        }

        center {
            margin-bottom: 60px;
        }

        footer img {
            padding: 6px;
        }
    </style>
</head>

<body id="home" class="scrollspy">
    <!-- navbar -->
    <div class="navbar-fixed">
        <nav class="black">
            <div class="container">
                <ul id="dropdown" class="dropdown-content">
                    <li><a href="#bike">Bike Edition</a></li>
                    <li><a href="#bw">B/W Edition</a></li>
                    <li><a href="#games">Games Edition</a></li>
                    <li><a href="#indo">Indonesia Edition</a></li>
                    <li><a href="#pubg">PUBG Edition</a></li>
                    <li><a href="#space">Space Edition</a></li>
                </ul>
                <div class="nav-wrapper">
                    <img class="brand-logo" src="../assets/img/Slide/Logo.png">
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons large">menu</i></a>
                    <ul class="red-text text-darken-2 right hide-on-med-and-down">
                        <li class="waves-effect waves-light"><a href="tambah.php">Tambah<i class="material-icons right">add_box</i></a></li>
                        <li><a class="dropdown-trigger waves-effect waves-light" href="#" data-target="dropdown">Edition<i class="material-icons right">arrow_drop_down_circle</i></a></li>
                        <li class="waves-effect waves-light"><a href="logout.php">Logout<i class="material-icons right">exit_to_app</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- sidenav -->
    <ul class="sidenav collapsible" id="mobile-nav">
        <li>
            <div class="collapsible-header">
                <i class="material-icons">arrow_drop_down_circle</i>Edition
            </div>
            <div class="collapsible-body">
                <ul>
                    <li><a href="#bike">Bike Edition</a></li>
                    <li><a href="#bw">B/W Edition</a></li>
                    <li><a href="#games">Games Edition</a></li>
                    <li><a href="#indo">Indonesia Edition</a></li>
                    <li><a href="#pubg">PUBG Edition</a></li>
                    <li><a href="#space">Space Edition</a></li>
                </ul>
            </div>
        </li>
        <li><a href="tambah.php"><i class="material-icons black-text">add_box</i>Tambah</a></li>
        <li><a href="logout.php"><i class="material-icons black-text">exit_to_app</i>Logout</a></li>
    </ul>

    <!-- slider -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="../assets/img/Slide/White.png">
                <div class="caption center-align">
                    <h2 class="red-text text-darken-3">Welcome, Admin</h2>
                    <h5 class="red-text text-darken-3">- MyCloth Indonesia -</h5>
                    <nav>
                        <div class="nav-wrapper">
                            <form action="" method="POST">
                                <div class="input-field">
                                    <input type="search" name="keyword" required autocomplete="off">
                                    <label class="label-icon" for="cari"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                    <button class="btn-flat" type="submit" name="cari"></button>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </li>
        </ul>
    </div>

    <!-- bike edition -->
    <div id="bike" class="parallax-container scrollspy">
        <div class="parallax">
            <img src="../assets/img/Edition/Bike.png">
        </div>
        <div class="container bike">
            <h2 class="center-align light-blue-text text-darken-3">Bike Edition</h2>
            <div class="row">
                <?php foreach ($bike as $bike) : ?>
                    <div class="col s12 m6">
                        <img src="../assets/img/Katalog/<?= $bike['img']; ?>" data-caption="<?= $bike['kode']; ?>" class="responsive-img materialboxed">
                        <center>
                            <a href="#" class="btn-floating waves-effect waves-light btn-large light-blue darken-3"><i class="material-icons">info</i></a>
                            <a href="update.php?id=<?= $bike['id'] ?>" class="btn-floating waves-effect waves-light btn-large light-blue darken-3"><i class="material-icons">update</i></a>
                            <a href="hapus.php?id=<?= $bike['id'] ?>" onclick="return confirm('Hapus Katalog Ini?')" class="btn-floating waves-effect waves-light btn-large light-blue darken-3"><i class="material-icons">delete</i></a>
                        </center>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- b/w edition -->
    <div id="bw" class="parallax-container scrollspy">
        <div class="parallax">
            <img src="../assets/img/Edition/BW.png">
        </div>
        <div class="container bw">
            <h2 class="center white-text text-darken-2">B/W Edition</h2>
            <div class="row">
                <?php foreach ($black as $black) : ?>
                    <div class="col s12 m6">
                        <img src="../assets/img/Katalog/<?= $black['img']; ?>" data-caption="<?= $black['id']; ?>. <?= $black['kode']; ?>" class="responsive-img materialboxed">
                        <center>
                            <a href="#" class="btn-floating waves-effect waves-light btn-large black"><i class="material-icons">info</i></a>
                            <a href="update.php?id=<?= $black['id'] ?>" class="btn-floating waves-effect waves-light btn-large black"><i class="material-icons">update</i></a>
                            <a href="hapus.php?id=<?= $black['id'] ?>" onclick="return confirm('Hapus Katalog Ini?')" class="btn-floating waves-effect waves-light btn-large black"><i class="material-icons">delete</i></a>
                        </center>
                    </div>
                <?php endforeach; ?>
                <?php foreach ($white as $white) : ?>
                    <div class="col s12 m6">
                        <img src="../assets/img/Katalog/<?= $white['img']; ?>" data-caption="<?= $white['id']; ?>. <?= $white['kode']; ?>" class="responsive-img materialboxed">
                        <center>
                            <a href="#" class="btn-floating waves-effect waves-light btn-large black"><i class="material-icons">info</i></a>
                            <a href="update.php?id=<?= $white['id'] ?>" class="btn-floating waves-effect waves-light btn-large black"><i class="material-icons">update</i></a>
                            <a href="hapus.php?id=<?= $white['id'] ?>" onclick="return confirm('Hapus Katalog Ini?')" class="btn-floating waves-effect waves-light btn-large black"><i class="material-icons">delete</i></a>
                        </center>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- games edition -->
    <div id="games" class="parallax-container scrollspy">
        <div class="parallax">
            <img src="../assets/img/Edition/Games.png">
        </div>
        <div class="container games">
            <h2 class="center yellow-text text-accent-3">Games Edition</h2>
            <div class="row">
                <?php foreach ($games as $games) : ?>
                    <div class="col s12 m6">
                        <img src="../assets/img/Katalog/<?= $games['img']; ?>" data-caption="<?= $games['id']; ?>. <?= $games['kode']; ?>" class="responsive-img materialboxed">
                        <center>
                            <a href="#" class="btn-floating waves-effect waves-light btn-large yellow accent-4"><i class="material-icons">info</i></a>
                            <a href="update.php?id=<?= $games['id'] ?>" class="btn-floating waves-effect waves-light btn-large yellow accent-4"><i class="material-icons">update</i></a>
                            <a href="hapus.php?id=<?= $games['id'] ?>" onclick="return confirm('Hapus Katalog Ini?')" class="btn-floating waves-effect waves-light btn-large yellow accent-4"><i class="material-icons">delete</i></a>
                        </center>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- indonesia edition -->
    <div id="indo" class="parallax-container scrollspy">
        <div class="parallax">
            <img src="../assets/img/Edition/Indonesia.png">
        </div>
        <div class="container indo">
            <h2 class="center red-text text-darken-3">Indonesia Edition</h2>
            <div class="row">
                <?php foreach ($indo as $indo) : ?>
                    <div class="col s12 m6">
                        <img src="../assets/img/Katalog/<?= $indo['img']; ?>" data-caption="<?= $indo['id']; ?>. <?= $indo['kode']; ?>" class="responsive-img materialboxed">
                        <center>
                            <a href="#" class="btn-floating waves-effect waves-light btn-large red darken-3"><i class="material-icons">info</i></a>
                            <a href="update.php?id=<?= $indo['id'] ?>" class="btn-floating waves-effect waves-light btn-large red darken-3"><i class="material-icons">update</i></a>
                            <a href="hapus.php?id=<?= $indo['id'] ?>" onclick="return confirm('Hapus Katalog Ini?')" class="btn-floating waves-effect waves-light btn-large red darken-3"><i class="material-icons">delete</i></a>
                        </center>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- pubg edition -->
    <div id="pubg" class="parallax-container scrollspy">
        <div class="parallax">
            <img src="../assets/img/Edition/PUBG.png">
        </div>
        <div class="container pubg">
            <h2 class="center black-text">PUBG Edition</h2>
            <div class="row">
                <?php foreach ($pubg as $pubg) : ?>
                    <div class="col s12 m6">
                        <img src="../assets/img/Katalog/<?= $pubg['img']; ?>" data-caption="<?= $pubg['id']; ?>. <?= $pubg['kode']; ?>" class="responsive-img materialboxed">
                        <center>
                            <a href="#" class="btn-floating waves-effect waves-light btn-large black"><i class="material-icons">info</i></a>
                            <a href="update.php?id=<?= $pubg['id'] ?>" class="btn-floating waves-effect waves-light btn-large black"><i class="material-icons">update</i></a>
                            <a href="hapus.php?id=<?= $pubg['id'] ?>" onclick="return confirm('Hapus Katalog Ini?')" class="btn-floating waves-effect waves-light btn-large black"><i class="material-icons">delete</i></a>
                        </center>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- space edition -->
    <div id="space" class="parallax-container scrollspy">
        <div class="parallax">
            <img src="../assets/img/Edition/Space.png">
        </div>
        <div class="container space">
            <h2 class="center amber-text text-accent-1">Space Edition</h2>
            <div class="row">
                <?php foreach ($space as $space) : ?>
                    <div class="col s12 m6">
                        <img src="../assets/img/Katalog/<?= $space['img']; ?>" data-caption="<?= $space['id']; ?>. <?= $space['kode']; ?>" class="responsive-img materialboxed">
                        <center>
                            <a href="#" class="btn-floating waves-effect waves-light btn-large amber accent-2"><i class="material-icons">info</i></a>
                            <a href="update.php?id=<?= $space['id'] ?>" class="btn-floating waves-effect waves-light btn-large amber accent-2"><i class="material-icons">update</i></a>
                            <a href="hapus.php?id=<?= $space['id'] ?>" onclick="return confirm('Hapus Katalog Ini?')" class="btn-floating waves-effect waves-light btn-large amber accent-2"><i class="material-icons">delete</i></a>
                        </center>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="page-footer red darken-2 white-text center-align">
        <div class="container">
            <div class="row">
                <div class="col s12 m6">
                    <h5 class="white-text">Follow Us</h5>
                    <img src="../assets/img/Sosmed/facebook.png" width="70px">
                    <img src="../assets/img/Sosmed/instagram.png" width="70px">
                    <img src="../assets/img/Sosmed/whatsapp.png" width="70px">
                </div>
                <div class="col s12 m6">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="white-text" href="#home">Home</a></li>
                        <li><a class="white-text" href="#bike">Bike Edition</a></li>
                        <li><a class="white-text" href="#bw">B/W Edition</a></li>
                        <li><a class="white-text" href="#games">Games Edition</a></li>
                        <li><a class="white-text" href="#indo">Indonesia Edition</a></li>
                        <li><a class="white-text" href="#space">Space Edition</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright red darken-2">
            <div class="container white-text">Copyright © 2020 MyCloth Indonesia</div>
        </div>
    </footer>

    <div class="clear"></div>

    <!-- javascript -->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const dropDown = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropDown, {
            coverTrigger: false,
        });

        const collapSible = document.querySelectorAll('.collapsible');
        M.Collapsible.init(collapSible);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 600,
            transition: 600,
            interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
            scrollOffset: 40
        });
    </script>
</body>

</html>