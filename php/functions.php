<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'mycloth_indonesia');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function daftar($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $status = htmlspecialchars($data['status']);
  $username = htmlspecialchars(strtolower($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $confirm = mysqli_real_escape_string($conn, $data['confirm']);

  if (empty($nama) || empty($status) || empty($username) || empty($password) || empty($confirm)) {
    echo "<script>
            alert('Username/Password tidak boleh kosong');
            document.location.href = 'daftar.php';
          </script>";
    return false;
  }

  if (query("SELECT * FROM member WHERE username = '$username'")) {
    echo "<script>
            alert('Username sudah terdaftar');
            document.location.href = 'daftar.php';
          </script>";
    return false;
  }

  if ($password !== $confirm) {
    echo "<script>
            alert('Konfirmasi Password tidak sesuai');
            document.location.href = 'daftar.php';
          </script>";
    return false;
  }

  if (strlen($username) < 5) {
    echo "<script>
              alert('Username terlalu pendek');
              document.location.href = 'daftar.php';
            </script>";
    return false;
  }

  if (strlen($password) < 5) {
    echo "<script>
            alert('Password terlalu pendek');
            document.location.href = 'daftar.php';
          </script>";
    return false;
  }

  $password_baru = password_hash($password, PASSWORD_DEFAULT);
  $query = "INSERT INTO member VALUES (null, '$nama', '$status', '$username', '$password_baru')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  if ($account = query("SELECT * FROM member WHERE username = '$username' AND status = 'Admin'")) {
    if (password_verify($password, $account['password'])) {
      $_SESSION['login'] = true;
      header("Location: admin.php");
      exit;
    }
  } else if ($account = query("SELECT * FROM member WHERE username = '$username' AND status = 'Member'")) {
    if (password_verify($password, $account['password'])) {
      $_SESSION['login'] = true;
      header("Location: member.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username/Password salah'
  ];
}

function upload()
{
  $nama_file = $_FILES['img']['name'];
  $tipe_file = $_FILES['img']['type'];
  $ukuran_file = $_FILES['img']['size'];
  $error = $_FILES['img']['error'];
  $tmp_file = $_FILES['img']['tmp_name'];

  if ($error == 4) {
    echo "<script>
            alert('Upload gambar terlebih dahulu');
          </script>";
    return false;
  }

  $daftar_gambar = ['png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('Yang anda upload bukan gambar');
          </script>";
    return false;
  }

  if ($tipe_file != 'image/png') {
    echo "<script>
            alert('Yang anda upload bukan gambar');
          </script>";
    return false;
  }

  if ($ukuran_file > 10000000) {
    echo "<script>
            alert('Ukuran gambar terlalu besar');
          </script>";
    return false;
  }

  move_uploaded_file($tmp_file, '../assets/img/Katalog/' . $nama_file);

  return $nama_file;
}

function tambah($data)
{
  $conn = koneksi();

  $kode = htmlspecialchars($data['kode']);
  $edisi = htmlspecialchars($data['edisi']);
  $harga = htmlspecialchars($data['harga']);
  $ukuran = htmlspecialchars($data['ukuran']);
  $img = upload();

  if (!$img) {
    return false;
  }

  $bike = "INSERT INTO bike_edition VALUES (null, '$img', '$kode', '$edisi', '$harga', '$ukuran');";
  $black = "INSERT INTO black_edition VALUES (null, '$img', '$kode', '$edisi', '$harga', '$ukuran');";
  $white = "INSERT INTO white_edition VALUES (null, '$img', '$kode', '$edisi', '$harga', '$ukuran');";
  $games = "INSERT INTO games_edition VALUES (null, '$img', '$kode', '$edisi', '$harga', '$ukuran');";
  $indo = "INSERT INTO indo_edition VALUES (null, '$img', '$kode', '$edisi', '$harga', '$ukuran');";
  $pubg = "INSERT INTO pubg_edition VALUES (null, '$img', '$kode', '$edisi', '$harga', '$ukuran');";
  $space = "INSERT INTO space_edition VALUES (null, '$img', '$kode', '$edisi', '$harga', '$ukuran');";

  mysqli_query($conn, $bike) or die(mysqli_error($conn));
  mysqli_query($conn, $black) or die(mysqli_error($conn));
  mysqli_query($conn, $white) or die(mysqli_error($conn));
  mysqli_query($conn, $games) or die(mysqli_error($conn));
  mysqli_query($conn, $indo) or die(mysqli_error($conn));
  mysqli_query($conn, $pubg) or die(mysqli_error($conn));
  mysqli_query($conn, $space) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function update($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $kode = htmlspecialchars($data['kode']);
  $edisi = htmlspecialchars($data['edisi']);
  $harga = htmlspecialchars($data['harga']);
  $ukuran = htmlspecialchars($data['ukuran']);
  $img = upload();

  if (!$img) {
    return false;
  }

  $bike = "UPDATE bike_edition SET
            img = '$img',
            kode = '$kode',
            edisi = '$edisi',
            harga = '$harga', 
            ukuran = '$ukuran'  
            WHERE id = $id";

  $black = "UPDATE black_edition SET
            img = '$img',
            kode = '$kode',
            edisi = '$edisi',
            harga = '$harga', 
            ukuran = '$ukuran'  
            WHERE id = $id";

  $white = "UPDATE white_edition SET
            img = '$img',
            kode = '$kode',
            edisi = '$edisi',
            harga = '$harga', 
            ukuran = '$ukuran'  
            WHERE id = $id";

  $games = "UPDATE games_edition SET
            img = '$img',
            kode = '$kode',
            edisi = '$edisi',
            harga = '$harga', 
            ukuran = '$ukuran'  
            WHERE id = $id";

  $indo = "UPDATE indo_edition SET
            img = '$img',
            kode = '$kode',
            edisi = '$edisi',
            harga = '$harga', 
            ukuran = '$ukuran'  
            WHERE id = $id";

  $pubg = "UPDATE pubg_edition SET
            img = '$img',
            kode = '$kode',
            edisi = '$edisi',
            harga = '$harga', 
            ukuran = '$ukuran'  
            WHERE id = $id";

  $space = "UPDATE space_edition SET
            img = '$img',
            kode = '$kode',
            edisi = '$edisi',
            harga = '$harga', 
            ukuran = '$ukuran'  
            WHERE id = $id";

  mysqli_query($conn, $bike) or die(mysqli_error($conn));
  mysqli_query($conn, $black) or die(mysqli_error($conn));
  mysqli_query($conn, $white) or die(mysqli_error($conn));
  mysqli_query($conn, $games) or die(mysqli_error($conn));
  mysqli_query($conn, $indo) or die(mysqli_error($conn));
  mysqli_query($conn, $pubg) or die(mysqli_error($conn));
  mysqli_query($conn, $space) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  $bike = query("SELECT * FROM bike_edition WHERE id = $id");
  unlink('../assets/img/Katalog/' . $bike['img']);
  $black = query("SELECT * FROM black_edition WHERE id = $id");
  unlink('../assets/img/Katalog/' . $black['img']);
  $white = query("SELECT * FROM white_edition WHERE id = $id");
  unlink('../assets/img/Katalog/' . $white['img']);
  $games = query("SELECT * FROM games_edition WHERE id = $id");
  unlink('../assets/img/Katalog/' . $games['img']);
  $indo = query("SELECT * FROM indo_edition WHERE id = $id");
  unlink('../assets/img/Katalog/' . $indo['img']);
  $pubg = query("SELECT * FROM pubg_edition WHERE id = $id");
  unlink('../assets/img/Katalog/' . $pubg['img']);
  $space = query("SELECT * FROM space_edition WHERE id = $id");
  unlink('../assets/img/Katalog/' . $space['img']);

  mysqli_query($conn, "DELETE FROM bike_edition WHERE id = $id") or die(mysqli_error($conn));
  mysqli_query($conn, "DELETE FROM black_edition WHERE id = $id") or die(mysqli_error($conn));
  mysqli_query($conn, "DELETE FROM white_edition WHERE id = $id") or die(mysqli_error($conn));
  mysqli_query($conn, "DELETE FROM games_edition WHERE id = $id") or die(mysqli_error($conn));
  mysqli_query($conn, "DELETE FROM indo_edition WHERE id = $id") or die(mysqli_error($conn));
  mysqli_query($conn, "DELETE FROM pubg_edition WHERE id = $id") or die(mysqli_error($conn));
  mysqli_query($conn, "DELETE FROM space_edition WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}
