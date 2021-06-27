<?php
include "../../config/koneksi.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = $konek->query("DELETE FROM `tb_pengumuman` WHERE ((`id_pengumuman` = '$id'))");

    if($query){
        echo "<script>
              alert('Data Berhasil Di Hapus');
              window.location.href='../../administrator/pengumuman.php'
              </script>";
    }else{
        echo "<script>
              alert('Data Gagal Di Hapus');
              window.location.href='../../administrator/pengumuman.php'
              </script>";
    }
}else{
    header("Location: ../../administrator/pengumuman.php");
}
?>