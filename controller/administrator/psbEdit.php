<?php
include "../../config/koneksi.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];
    
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $no_nisn = $_POST['no_nisn'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $asl_sekolah = $_POST['asl_sekolah'];
        $jns_kelamin = $_POST['jns_kelamin'];
        $nm_ortu = $_POST['nm_ortu'];
        $pekerjaan = $_POST['pekerjaan'];
        $agama = $_POST['agama'];
        $prog_pilihan = $_POST['prog_pilihan'];
        
        $query = $konek->query("UPDATE `siswa` SET `nama` = '$nama', `no_nisn` = '$no_nisn', `alamat` = '$alamat', `no_telp` = '$no_telp', `asl_sekolah` = '$asl_sekolah', `jns_kelamin` = '$jns_kelamin', `nm_ortu` = '$nm_ortu', `pekerjaan` = '$pekerjaan', `agama` = '$agama', `prog_pilihan` = '$prog_pilihan' WHERE id_siswa = '$id'");
        
        if($query){
            echo "<script>
                  alert('Data Berhasil Di Edit');
                  window.location.href='../../administrator/data-psb.php'
                  </script>";
        }else{
            echo "<script>
                  alert('Data Gagal Di Edit Silahkan Hubungi CS')
                  window.location.replace('../../administrator/data-psb.php');
                  </script>";
        }
    }

}
?>