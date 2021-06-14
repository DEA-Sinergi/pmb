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
				<li> <img src="asset/img/slider/slider1.jpeg"> </li>
				<li> <img src="asset/img/slider/slider2.jpg"> </li>
				<li> <img src="asset/img/slider/slider3.png"> </li>
			</ul>
		</div>
	</section>

	<section style="padding: 20px 0;" id="variestas" class="section scrollspy grey lighten-3">
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
										<td><a href="" class="btn mb-1 mt-2 btn-rounded btn-info" data-toggle="modal" data-target="#newSubmenuModal"><span class="btn-icon-left"><i class="fa fa-address-card-o color-success"></i> </span>Detail Berita</a></td>
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
										<td><a href="" class="btn mb-1 mt-2 btn-rounded btn-info" data-toggle="modal" data-target="#newSubmenuModal"><span class="btn-icon-left"><i class="fa fa-address-card-o color-success"></i> </span>Detail Berita</a></td>
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
										<td><a href="" class="btn mb-1 mt-2 btn-rounded btn-info" data-toggle="modal" data-target="#newSubmenuModal"><span class="btn-icon-left"><i class="fa fa-address-card-o color-success"></i> </span>Detail Berita</a></td>
									</tr>
								</table>

							</b></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="tentang" class="section scrollspy">
		<div class="row">
			<h3 class="center">Tentang Tebuku</h3>
			<div class="container">
				<p class="lead center"><b>TEBUKU</b> Merupakan sebuah sarana pembelajaran serta pengetahuan akan berbagai macam varietas tebu yang telah terdaftar pada Direktorat Jendral Kementrian Pertanian Republik Indonesia yang bermanfaat untuk meningkatkan kualitas produksi tebu dimasyarakat.</p>
			</div>
		</div>
	</section>

	<section id="bantuan" class="grey lighten-3 section scrollspy">
		<br>
		<div class="container">
			<h3 class="center">Panduan Pengguna</h3>
			<div class="center" style="font-size: 25px">
				<span>Mulai &#8594; Pengguna Mengakses aplikasi &#8594; Lihat Daftar variestas &#8594; Selesai</span>
			</div>
		</div>
		<br><br>
	</section>

	<!-- modal detail -->

	<div class="modal fade" id="newSubmenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubmenuModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="newSubmenuModalLabel">Detail Berita</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="" method="">
					<div class="modal-body">
						<div class="form-group">
							<img src="asset/img/default.jpg" width="250" alt="gambar">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
						</div>
						<div class="form-group">
							<textarea name="isi" class="form-control" id="isi" cols="30" rows="10" placeholder="Isi Berita"></textarea>
						</div>
						<div class="form-group">
							<input type="date" class="form-control" id="tanggal" name="tanggal">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Tambah</button>
					</div>
				</form>
			</div>
		</div>
	</div>


</main>



<?php include "layout/footer.php" ?>