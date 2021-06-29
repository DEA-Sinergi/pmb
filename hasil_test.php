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
        <li><a href="index.php#profile">Profile</a></li>
        <li><a href="index.php#fasilitas">Fasilitas</a></li>
        <li><a href="index.php#berita">Berita</a></li>
        <!-- menu ini nantik muncul ketika sudah login -->
        <?php
        session_start();
        if($_SESSION != null){
          if($_SESSION['status'] == "login"){
        ?>
        <li><a href="pengumuman.php">Pengumuman</a></li>
        <li><a href="data_psb.php">Data PSB</a></li>
        <li><a href="hasil_test.php">Hasil Tes</a></li>
        <li><a href="controller/logout.php">Logout</a></li>
        <?php
          }
        }
        if ($_SESSION == null) {
        ?>
        <li><a href="#daftarPsb" data-toggle="modal" class="modal-trigger">Daftar PSB</a></li>
        <?php
          }
        ?>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="index.php#profile">Profile</a></li>
        <li><a href="index.php#fasilitas">Fasilitas</a></li>
        <li><a href="index.php#berita">Berita</a></li>
        <!-- menu ini nantik muncul ketika sudah login -->
        <?php
        session_start();
        if($_SESSION != null){
          if($_SESSION['status'] == "login"){
        ?>
        <li><a href="pengumuman.php">Pengumuman</a></li>
        <li><a href="data_psb.php">Data PSB</a></li>
        <li><a href="hasil_test.php">Hasil Tes</a></li>
        <li><a href="controller/logout.php">Logout</a></li>
        <?php
          }
        }
        if ($_SESSION == null) {
        ?>
        <li><a href="#daftarPsb" data-toggle="modal" class="modal-trigger">Daftar PSB</a></li>
        <?php
          }
        ?>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
<main>
	<!-- isi -->

	<div class="container">
		<h4>Hasil Tes</h4>
		<table class="responsive-table highlight">
			<thead>
				<tr>
					<th>No Pendaftaran</th>
					<th>No NISN</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Asal Sekolah</th>
					<th>Jenis Kelamin</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include "config/koneksi.php";

				$query = $konek->query("SELECT siswa.no_nisn, siswa.nama, siswa.alamat, siswa.asl_sekolah, siswa.jns_kelamin, hsl_tes.* FROM hsl_tes INNER JOIN siswa ON hsl_tes.no_daftar=siswa.no_daftar");
				while($row = $query->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $row['no_daftar']?></td>
					<td><?php echo $row['no_nisn']?></td>
					<td><?php echo $row['nama']?></td>
					<td><?php echo $row['alamat']?></td>
					<td><?php echo $row['asl_sekolah']?></td>
					<td><?php echo $row['jns_kelamin']?></td>
					<td><?php echo $row['status']?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</main>
<footer class="page-footer blue" style="position: absolute; bottom: 0px; left: 0px; right: 0px;">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="">Moch.Faisol Aristama</a>
      </div>
    </div>
</footer>

  <!--  Scripts-->
  <script src="asset/js/jquery-2.1.1.min.js"></script>
  <script src="asset/js/materialize.js"></script>
  <script src="asset/js/init.js"></script>

  </body>
</html>
