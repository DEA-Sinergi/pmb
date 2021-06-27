<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>SMP Muhammadiyah 3 - Kutorejo</title>

  <!-- CSS  -->
  <link href="asset/css/icon.css" rel="stylesheet">
  <link href="asset/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="asset/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <style>
    .tabs .indicator {
      background-color: #1976d2;
    }
  </style>
</head>
<body>
  <nav class="blue" role="navigation">
    <div class="nav-wrapper container">
      <!-- <a id="logo-container" href="#" class="brand-logo">Logo</a> -->
      <img src="asset/img/logo.jpeg" id="logo-container" class="brand-logo" alt="" style="width: 65px">
      <ul class="right hide-on-med-and-down">
        <li><a href="#profile">Profile</a></li>
        <li><a href="#fasilitas">Fasilitas</a></li>
        <li><a href="#berita">Berita</a></li>
        <!-- menu ini nantik muncul ketika sudah login -->
        <?php
          session_start();
          if($_SESSION['status'] == "login"){
        ?>
        <li><a href="pengumuman.php">Pengumuman</a></li>
        <li><a href="data_psb.php">Data PSB</a></li>
        <li><a href="hasil_test.php">Hasil Tes</a></li>
        <li><a href="controller/logout.php">Logout</a></li>
        <?php
          }
          if($_SESSION['status'] != "login"){
        ?>
        <li><a href="#daftarPsb" data-toggle="modal" class="modal-trigger">Daftar PSB</a></li>
        <?php } ?>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#profile">Profile</a></li>
        <li><a href="#fasilitas">Fasilitas</a></li>
        <li><a href="#berita">Berita</a></li>
        <!-- menu ini nantik muncul ketika sudah login -->
        <?php
          session_start();
          if($_SESSION['status'] == "login"){
        ?>
        <li><a href="#bantuan">Pengumuman</a></li>
        <li><a href="data_psb.php">Data PSB</a></li>
        <li><a href="hasil_test.php">Hasil Tes</a></li>
        <li><a href="controller/logout.php">Logout</a></li>
        <?php
          }
          if($_SESSION['status'] != "login"){
        ?>
        <li><a href="#daftarPsb" data-toggle="modal" class="modal-trigger">Daftar PSB</a></li>
        <?php } ?>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>