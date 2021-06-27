<?php
include "../../config/koneksi.php";

// var_dump($konek);
if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = $konek->query("DELETE FROM `tb_berita` WHERE ((`id_berita` = '$id'))");

    if($query){
        echo "<script>
              alert('Data Berhasil Di Hapus');
              window.location.href='../../administrator/index.php'
              </script>";
    }else{
        echo "<script>
              alert('Data Gagal Di Hapus');
              window.location.href='../../administrator/index.php'
              </script>";
    }
}else{
    header("Location: ../../administrator/index.php");
}

?>