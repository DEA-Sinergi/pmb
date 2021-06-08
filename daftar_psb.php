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

	$query = mysqli_query($konek,"INSERT INTO `siswa` (`no_daftar`, `nama`, `no_nisn`, `alamat`, `no_telp`, `asl_sekolah`, `jns_kelamin`, `tgl_lahir`, `nm_ortu`, `pekerjaan`, `agama`, `prog_pilihan`)
	VALUES ('1', 'lksadkas', 'laksmdlkas', 'alksmd', 'alksdlak', 'alksmdlaksmd', 1, now(), 'alkjsdlkasd', '$pekerjan', '$agama', '$prog_pilihan');");

	var_dump($query);
	if ($query) {
		echo "berhasil disimpan";
	}else{
		echo "gagal menyimpan";
	}

}
	
	
?>
<h3>Isi Data PSB</h3>
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
</form>