<?php
include('config/koneksi.php');

if (isset($_POST['simpan'])) {
	$nama 		   = $_POST['nama'];
	$no_nisn 	   = $_POST['no_nisn'];
	$alamat 	   = $_POST['alamat'];
	$asal_sekolah  = $_POST['asal_sekolah'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama 		   = $_POST['agama'];
	$tem_lahir     = $_POST['tem_lahir'];
	$tang_lahir    = $_POST['tang_lahir'];
	$n_ortu 	   = $_POST['n_ortu'];
	$pekerjan 	   = $_POST['pekerjaan'];
	$prog_pilihan  = $_POST['prog_pilihan'];


	$query = mysqli_query($konek, "INSERT INTO `siswa` (`no_daftar`, `nama`, `no_nisn`, `alamat`, `no_telp`, `asl_sekolah`, `jns_kelamin`, `tgl_lahir`, `nm_ortu`, `pekerjaan`, `agama`, `prog_pilihan`)
	VALUES ('1', 'lksadkas', 'laksmdlkas', 'alksmd', 'alksdlak', 'alksmdlaksmd', 1, now(), 'alkjsdlkasd', '$pekerjan', '$agama', '$prog_pilihan');");

	var_dump($query);
	if ($query) {
		echo "berhasil disimpan";
	} else {
		echo "gagal menyimpan";
	}
}


?>
<?php include "layout/header.php" ?>
<!-- <h3>Isi Data PSB</h3>
<form action="" method="POST">
	Nama : <input type="text" name="nama"><br>
	No Nisn : <input type="text" name="no_nisn"><br>
	Alamat : <input type="text" name="alamat"><br>
	No Telp : <input type="text" name="no_telp"><br>
	Asal Sekolah : <input type="text" name="asal_sekolah"><br>
	Jenis Kelamin : <select name="jenis_kelamin" id="">
		<option value="laki-laki">laki-laki</option>
		<option value="perempuan">perempuan</option>
	</select>
	<br>
	Agama : <input type="text" name="agama"><br>
	Tempat Tanggal Lahir : <input type="text" name="tem_lahir"><input type="date" name="tang_lahir"><br>
	Nama Orang Tua : <input type="text" name="n_ortu"><br>
	Pekerjaan : <input type="text" name="pekerjaan"><br>
	Program Pilihan : <input type="text" name="prog_pilihan"><br>
	<button type="submit" name="simpan">Simpan</button>
</form> -->
<div class="container">
	<div class="section">

		<div class="divider"></div>
		<div id="basic-form" class="section">
			<div class="row">
				<div class="col s12 m12 l12">
					<div class="card-panel">
						<h4 class="header2">Isi Data Pendaftaran Siswa Baru</h4>
						<div class="row">
							<form class="col s12" method="POST" action="proses_simpan.php" enctype="multipart/form-data">
								<div class="form-group">
									<div class="input-field col s12">
										<input id="nama" type="text" name="nama" required="nama">
										<label for="nama">Nama</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-field col s12">
										<input id="no_nisn" type="text" name="no_nisn" required="no_nisn">
										<label for="no_nisn">No NISN</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-field col s12">
										<input id="alamat" type="text" name="alamat" required="alamat">
										<label for="sifat_morfologi">Alamat</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-field col s12">
										<input id="no_telp" type="text" name="no_telp" required="no_telp">
										<label for="no_telp">No Telepon</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-field col s12">
										<input id="asal_sekolah" type="text" name="asal_sekolah" required="asal_sekolah">
										<label for="asal_sekolah">Asal Sekolah</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-field col s12">
										<select>
											<option value="" disabled selected>Jenis Kelamin</option>
											<option value="l">Laki - Laki</option>
											<option value="p">Perempuan</option>
										</select>
										<label>Jenis Kelamin</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-field col s12">
										<input id="agama" type="text" name="agama" required="agama">
										<label for="agama">Agama</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-field col s12">
										<input id="tem_lahir" type="text" name="tem_lahir" required="tem_lahir">
										<label for="tem_lahir">Tempat Lahir</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-field col s12">
										<input id="tgl_lahir" type="date" name="tgl_lahir">
										<label for="tgl_lahir">Tanggal Lahir</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-field col s12">
										<input id="n_ortu" type="text" name="n_ortu" required="n_ortu">
										<label for="n_ortu">Nama Orang Tua</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-field col s12">
										<input id="Pekerjaan" type="text" name="Pekerjaan" required="Pekerjaan">
										<label for="Pekerjaan">Pekerjaan</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-field col s12">
										<input id="prog_pilihan" type="text" name="prog_pilihan" required="prog_pilihan">
										<label for="prog_pilihan">Program Pilihan</label>
									</div>
								</div>
								<div class="form-group">
									<label for="inputfoto" class="col-sm-3 control-label">FOTO:</label>
									<div class="col-sm-7">
										<input type="file" name="foto" class="form-control" colums id="inputfoto" required="foto" placeholder="foto"></br>
									</div>
								</div>

								<div class="form-group">
									<div class="input-field col s12">
										<button class="btn waves-effect waves-light right" type="submit" name="action">Simpan
											<i class="material-icons right">send</i>
										</button>
									</div>
								</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "layout/footer.php" ?>