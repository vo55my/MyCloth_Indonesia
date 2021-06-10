<?php
session_start();

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
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
  <title>MyCloth Login</title>
  <style>
    form {
      margin-top: 30px;
      margin-bottom: 30px;
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

  <!-- form login -->
  <form action="" method="post">
    <div class="row formulir">
      <div class="col s12 m4 offset-m4">
        <div class="card">
          <div class="card-action">
            <h3 class="center-align">Login</h3>
            <?php if (isset($error)) : ?>
              <p class="red-text center-align">Username atau Password salah</p>
            <?php endif; ?>
          </div>
          <div class="card-content">
            <div class="input-field">
              <i class="material-icons prefix">account_circle</i>
              <label for="username">Username</label>
              <input type="text" name="username" required autocomplete="off" autofocus>
            </div>
            <div class="input-field">
              <i class="material-icons prefix">lock</i>
              <label for="password">Password</label>
              <input type="password" name="password" required autocomplete="off">
            </div>
            <div class="remember">
              <label>
                <input type="checkbox" class="filled-in" name="remember">
                <span class="black-text">Ingat Saya</span>
              </label>
            </div>
            <div class="input-field">
              <button type="submit" name="login" class="btn-small waves-effect waves-dark red">Login</button>
              <button type="submit" class="btn-small waves-effect waves-dark red">
                <a class="white-text" href="../index.php">Kembali</a>
              </button>
            </div>
            <div class="input-field">
              <p>Belum punya akun? Daftar <a href="daftar.php">Disini</a></p>
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