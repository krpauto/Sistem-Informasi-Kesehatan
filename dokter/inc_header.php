<?php
session_start();
include("../inc/inc_koneksi.php");
include("../inc/inc_fungsi.php");
?>

<?php
include("config.php");
if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $result = mysqli_query($con, "SELECT * FROM dokter WHERE email='$email'AND password='$password'") or die("select error");
  $row = mysqli_fetch_assoc($result);

  if (is_array($row) && !empty($row)) {
    $_SESSION['valid'] = $row['email'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['nama'] = $row['nama'];
  } else {
    echo "<div class='messege'>
                <p>Wrong Username or Password!</p>
                </div><br>";

    echo "<a href= 'indexlogina.php'><button class='btn'>Go Back</button>";
  }
  if (isset($_SESSION['valid'])) {
    header("Location: dokter/index.php");
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Dokter</title>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>

  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

  <link href="../css/summernote-image-list.css">
  <script src="../js/summernote-image-list.min.js"></script>

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <style>
    .image-list-content .col-lg-3 {
      width: 100%
    }

    .image-list-content img {
      float: left;
      width: 20%
    }

    .image-list-content p {
      float: left;
      padding-left: 20px
    }

    .image-list-item {
      padding: 10px 0px 10px 0px
    }
  </style>
</head>

<body>
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-white">Dokter</a></li>
          <li><a href="profile.php" class="nav-link px-2 text-white">Profile</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Konsultasi</a></li>
          <li><a href="logout.php" class="nav-link px-2 text-white">Logout</a></li>
        </ul>
      </div>
    </div>
  </header>

  <main></main>