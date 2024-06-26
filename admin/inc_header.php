<?php
include("../inc/inc_koneksi.php");
include("../inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Company Profile</title>
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
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    body {
      font-family: 'Poppins', sans-serif;
      font-size: 14px !important;
    }


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
          <li><a href="#" class="nav-link px-2 text-white">HealthCare</a></li>
          <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="informasi.php" class="nav-link px-2 text-white">Informasi Kesehatan</a></li>
          <li><a href="pasien.php" class="nav-link px-2 text-white">Data Pasien</a></li>
          <li><a href="dokter.php" class="nav-link px-2 text-white">Data Dokter</a></li>
          <li><a href="logout.php" class="nav-link px-2 text-white">Logout</a></li>
        </ul>
      </div>
    </div>
  </header>
  <main></main>