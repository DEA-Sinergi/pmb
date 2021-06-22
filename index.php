<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
</head>
<body>
	<center>	
		<h1>Logo Dan Nama Sekolah</h1>
		<a href="index.php">Home</a>
		<a href="profile.php">Profile</a>
		<a href="pengumuman.php">Pengumuman</a>
		<a href="berita.php">Berita</a>
		<a href="fasilitas.php">Fasilitas</a>
		<a href="daftar_psb.php">Daftar PSB</a>
		<a href="data_psb.php">Data PSB</a>
		<a href="hasil_test.php">Hasil Tes</a>
		<a href="login.php">Login</a>
	</center>
</body>
</html> -->

<?php
include 'koneksi.php';
?>
<?php include "layout/header.php" ?>
<main>
	<section id="home" class="section scrollspy">
		<div class="slider">
			<ul class="slides">
				<li> <img src="asset/img/slider/1.jpg"> </li>
				<li> <img src="asset/img/slider/2.jpg"> </li>
				<li> <img src="asset/img/slider/3.jpg"> </li>
			</ul>
		</div>
	</section>

	<section id="variestas" class="section scrollspy grey lighten-3">
		<div class="container">
			<div class="row">
				<h3 class="center grey-text text-darken-3">Daftar Berita</h3>

				<div class="col m4 s12">
					<div class="card-panel center">
						<p class="light"><b>
								<img class="materialboxed" data-caption="Gambar Tebu" width="250" src="asset/img/default.jpg">
								<table>
									<tr>
										<h4 class="text-justify">Lorem ipsum</h4>
									</tr>
									<tr>
										<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quae!...</td>
									</tr>
									<tr>
										<td><a class="waves-effect waves-light btn modal-trigger right" href="#modal1">Detail Berita</a></td>
									</tr>
								</table>

							</b></p>
					</div>
				</div>

				<div class="col m4 s12">
					<div class="card-panel center">
						<p class="light"><b>
								<img class="materialboxed" data-caption="Gambar Tebu" width="250" src="asset/img/default.jpg">
								<table>
									<tr>
										<h4 class="text-justify">Lorem ipsum</h4>
									</tr>
									<tr>
										<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quae!...</td>
									</tr>
									<tr>
										<td><a class="waves-effect waves-light btn modal-trigger right" href="#modal1">Detail Berita</a></td>
									</tr>
								</table>

							</b></p>
					</div>
				</div>

				<div class="col m4 s12">
					<div class="card-panel center">
						<p class="light"><b>
								<img class="materialboxed" data-caption="Gambar Tebu" width="250" src="asset/img/default.jpg">
								<table>
									<tr>
										<h4 class="text-justify">Lorem ipsum</h4>
									</tr>
									<tr>
										<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quae!...</td>
									</tr>
									<tr>
										<td><a class="waves-effect waves-light btn modal-trigger right" href="#modal1">Detail Berita</a></td>
									</tr>
								</table>

							</b></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="tentang" class="section scrollspy">
		<div class="container">
			<div class="row center">
				<h3>VISI</h3>
				<p>Sekolah Unggul Berkarakter Berbasis Nilai-nilai Islam.</p>
				<h3>MISI</h3>
				<p>1. Menyelenggarakan pendidikan dan pembelajaran holistik berbasis nilai-nilai islam.</p>
				<p>2. Meningkatkan mutu sumber daya manusia yang mempunyai keunggulan moral, intelektual, sehat, dan profesional.</p>
				<p>3. Mewujudkan sarana dan prasarana yang modern dan berstandart Internasional.</p>
				<p>4. Melaksanakan tata kelola sekolah secara kredibel tansparan, akuntabel, tanggung jawab, dan adil.</p>
				<p>5. Mengembangkan kerja sama untuk perluasan akses dan peningkatan mutu pendi</p>
			</div>
		</div>
	</section>

	<section id="bantuan" class="grey lighten-3 section scrollspy">
		<br>
		<div class="container center">
			<h3>Fasilitas</h3>
			<div>
				<h6>1. Ruang Kelas Full AC</h6>
				<h6>2. Lapangan Futsal</h6>
				<h6>3. Lapangan Basket</h6>
				<h6>4. Lapangan Volly</h6>
				<h6>5. Unit Kesehatan Sekolah</h6>
				<h6>6. Koperasi</h6>
				<h6>7. Laboratorium IPA</h6>
				<h6>8. Laboratorium Komputer</h6>
				<h6>9. Jaringan Internet/Wifi</h6>
				<h6>10. Musholla</h6>
				<h6>11. Aula</h6>
			</div>
		</div>
	</section>


	<!-- Modal Structure -->
	<div id="modal1" class="modal">
		<div class="modal-content center-align">
			<div class="form-group">
				<img src="asset/img/default.jpg" width="250" alt="gambar">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="judul" name="judul" value="Judul">
			</div>
			<div class="form-group">
				<input name="isi" class="form-control" id="isi" value="Isi Berita"></input>
			</div>
			<div class="form-group">
				<input type="date" class="form-control" id="tanggal" name="tanggal">
			</div>
		</div>
		<div class="modal-footer">
			<button class="modal-close waves-effect waves-green btn-flat">Tutup</button>
		</div>
	</div>


</main>



<?php include "layout/footer.php" ?>