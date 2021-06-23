<?php
include "../config/koneksi.php";

$nama         = $_POST['nama'];
$username     = $_POST['username'];
$password     = $_POST['password'];
$no_nisn      = $_POST['no_nisn'];
$alamat       = $_POST['alamat'];
$no_telp      = $_POST['no_telp'];
$asl_sekolah  = $_POST['asl_sekolah'];
$jns_kelamin  = $_POST['jns_kelamin'];
$tgl_lahir    = $_POST['tgl_lahir'];
$nm_ortu      = $_POST['nm_ortu'];
$pekerjaan    = $_POST['pekerjaan'];
$agama        = $_POST['agama'];
$prog_pilihan = $_POST['prog_pilihan'];

$queryN    = $konek->query('SELECT `no_daftar` FROM siswa ORDER BY `id_siswa` DESC LIMIT 1');
$no_daftar = $queryN->fetch_assoc()['no_daftar'] + 1;
$email     = $nama."@gmail.com";

$queryS = $konek->query("INSERT INTO `siswa` (`no_daftar`, `nama`, `no_nisn`, `alamat`, `no_telp`, `asl_sekolah`, `jns_kelamin`, `tgl_lahir`, `nm_ortu`, `pekerjaan`, `agama`, `prog_pilihan`)
VALUES ('$no_daftar', '$nama', '$no_nisn', '$alamat', '$no_telp', '$asl_sekolah', '$jns_kelamin', '$tgl_lahir', '$nm_ortu', '$pekerjaan', '$agama', '$prog_pilihan')");

$queryU = $konek->query("INSERT INTO `user` (`nama`, `username`, `password`, `email`) VALUES ('$nama', '$username', '$password', '$email')");

if ($queryS) {
    session_start();
    $_SESSION['useraname'] = $username;
    $_SESSION['status'] = "login";
    header('Location:../index.php');
}else{
    header('Location:../index.php');
}
?>