<?php include "layout/header.php" ?>

<section id="home" class="section scrollspy" style="position:relative; top: -14px;">
  <div class="slider">
    <ul class="slides">
      <li> <img src="asset/img/slider/slider4.jpeg"> </li>
      <li> <img src="asset/img/slider/slider5.jpeg"> </li>
      <li> <img src="asset/img/slider/slider6.jpg"> </li>
    </ul>
  </div>
</section>

  <div class="container">
    <div class="section section scrollspy" id="profile">
    <div class="row">
      <div class="col s12 center" id="profile">
        <h3><i class="mdi-content-send brown-text"></i></h3>
        <h4>Profile Sekolah</h4>
        <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
      </div>
    </div>

  </div>
</div>

<section id="fasilitas" class="section scrollspy grey lighten-3">
  <div class="row">
    <h4 class="center">Fasilitas</h4>
    <div class="container">
      <p class="lead center"><b>TEBUKU</b> Merupakan sebuah sarana pembelajaran serta pengetahuan akan berbagai macam varietas tebu yang telah terdaftar pada Direktorat Jendral Kementrian Pertanian Republik Indonesia yang bermanfaat untuk meningkatkan kualitas produksi tebu dimasyarakat.</p>
    </div>
  </div>
</section>

<section style="padding: 20px 0;" id="berita" class="section scrollspy">
  <div class="container">
    <div class="row">
      <h3 class="center grey-text text-darken-3">Daftar Berita</h3>
      <?php
      include "config/koneksi.php";
      $query = $konek->query("SELECT * FROM `tb_berita` ORDER BY `id_berita` DESC LIMIT 3");

	<section id="fasilitas" class="section scrollspy grey lighten-3">
		<div class="row">
			<h4 class="center">Fasilitas</h4>
			<div class="container">
				<p class="lead center"><b>TEBUKU</b> Merupakan sebuah sarana pembelajaran serta pengetahuan akan berbagai macam varietas tebu yang telah terdaftar pada Direktorat Jendral Kementrian Pertanian Republik Indonesia yang bermanfaat untuk meningkatkan kualitas produksi tebu dimasyarakat.</p>
			</div>
		</div>
	</section>

	<section style="padding: 20px 0;" id="berita" class="section scrollspy">
		<div class="container">
			<div class="row">
				<h3 class="center grey-text text-darken-3">Daftar Berita</h3>
        <?php
          include "config/koneksi.php";
          $query = $konek->query("SELECT * FROM `tb_berita` ORDER BY `id_berita` DESC LIMIT 3");
        
          while ($row = $query->fetch_assoc()) {
          
        ?>
        <div class="col m4 s12">
          <div class="card-panel center">
            <p class="light"><b>
                <img class="materialboxed" data-caption="Gambar Tebu" width="250" src="asset/img/<?php echo $row['gambar'] ?>">
                <table>
                  <tr>
                    <h4 class="text-justify"><?php echo $row['judul'] ?></h4>
                  </tr>
                  <tr>
                    <td><?php echo $row['isi_berita'] ?>...</td>
                  </tr>
                  <tr>
                    <td><a href="#newSubmenuModal" class="btn btn-rounded btn-info right modal-trigger" data-toggle="modal"><span class="btn-icon-left"><i class="fa fa-address-card-o color-success"></i> </span>Detail Berita</a></td>
                  </tr>
                </table>

              </b></p>
          </div>
        </div>
      <?php } ?>

    </div>
    <center>
      <a href="" class="btn btn-info">Lebih Banyak</a>
    </center>
  </div>
</section>

<div class="parallax-container valign-wrapper">
  <div class="parallax"><img src="asset/img/slider-home.jpg" alt="Unsplashed background img 3"></div>
</div>

<div id="daftarPsb" class="modal">
  <div class="modal-content">
    <div class="row">
      <div class="col s12">
        <div>
          <ul class="tabs">
            <li class="tab col s3"><a href="#masuk" class="active blue-text">Masuk</a></li>
            <li class="tab col s3"><a href="#daftar" class="blue-text">Daftar</a></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div id="masuk">
          <form class="col s12" method="POST" action="controller/login.php">
            <div class="row modal-form-row">
              <div class="input-field col s12">
                <input id="username" type="text" class="validate" name="username">
                <label for="username">Username</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" class="validate" name="password">
                <label for="password">Password</label>
              </div>
            </div>
          </div>
          <button type="submit" class="btn blue">Masuk</button>
        </form>
      </div>
      <div id="daftar">
        <form class="col s12" method="POST" action="controller/daftar.php">
          <div class="row modal-form-row">
            <div class="input-field col s12">
              <input id="nama" name="nama" type="text" class="validate">
              <label for="nama">Nama Lengkap</label>
            </div>
          </div>
          <div class="row modal-form-row">
            <div class="input-field col s12">
              <input id="username" name="username" type="text" class="validate">
              <label for="username">Username</label>
            </div>
          </div>
          <div class="row modal-form-row">
            <div class="input-field col s12">
              <input id="password" name="password" type="text" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="no_nisn" name="no_nisn" type="text" class="validate">
              <label for="no_nisn">No NISN</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="alamat" name="alamat" type="text" class="materialize-textarea validate"></textarea>
              <label for="alamat">Alamat</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="no_telp" name="no_telp" type="text" class="validate">
              <label for="no_telp">No Telp</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="asl_sekolah" name="asl_sekolah" type="text" class="validate">
              <label for="asl_sekolah">Asal Sekolah</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <select name="jns_kelamin" id="jns_kelamin">
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
              <label for="jns_kelamin">Jenis Kelamin</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="tgl_lahir" name="tgl_lahir" type="text" class="validate datepicker">
              <label for="tgl_lahir">Tanggal Lahir</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="nm_ortu" name="nm_ortu" type="text" class="validate">
              <label for="nm_ortu">Nama Orang Tua</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="pekerjaan" name="pekerjaan" type="text" class="validate">
              <label for="pekerjaan">Pekerjaan</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="agama" name="agama" type="text" class="validate">
              <label for="agama">Agama</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="prog_pilihan" name="prog_pilihan" type="text" class="validate">
              <label for="prog_pilihan">Program Pilihan</label>
            </div>
          </div>
          <button type="submit" class="btn blue">Daftar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Structure -->
<div id="newSubmenuModal" class="modal">
  <div class="modal-content">
    <img class="materialboxed" data-caption="Gambar Tebu" width="250" src="asset/img/<?php echo $row['gambar'] ?>">
    <h4 class="text-justify"><?php echo $row['judul'] ?></h4>
    <5><?php echo $row['isi_berita'] ?></5>
  </div>
  <div class="modal-footer">
    <button class="modal-close waves-effect waves-green btn-flat">Tutup</button>
  </div>
</div>

<?php include "layout/footer.php" ?>