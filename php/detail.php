<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: ../index.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];

$bike = query("SELECT * FROM bike_edition WHERE id = $id");
$black = query("SELECT * FROM black_edition WHERE id = $id");
$white = query("SELECT * FROM white_edition WHERE id = $id");
$games = query("SELECT * FROM games_edition WHERE id = $id");
$indo = query("SELECT * FROM indo_edition WHERE id = $id");
$pubg = query("SELECT * FROM pubg_edition WHERE id = $id");
$space = query("SELECT * FROM space_edition WHERE id = $id");
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
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/Slide/Profil.png">
  <title>MyCloth Detail</title>
</head>

<body>
  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="black">
      <div class="container">
        <div class="nav-wrapper">
          <img class="brand-logo" src="../assets/img/Slide/Profil.png">
        </div>
      </div>
    </nav>
  </div>

  <!-- detail -->
  <div class="container">
    <table>
      <thead>
        <tr>
          <th>Gambar</th>
          <th>Deskripsi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="3">
            <img class="responsive-img" src="../assets/img/Katalog/<?= $bike['img']; ?>">
          </td>
        </tr>
        <tr>
          <td>
            <p>Kode : <?= $bike['kode']; ?></p>
            <p>Edisi : <?= $bike['edisi']; ?></p>
            <p>Harga : Rp. <?= $bike['harga']; ?></p>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- footer -->
  <footer class="footer red darken-2 white-text center-align">
    <p>Copyright © 2020 MyCloth Indonesia</p>
  </footer>

  <div class="clear"></div>

  <!-- javascript -->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>