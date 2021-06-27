<?php
include "../../config/koneksi.php";

// var_dump($konek);
if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = $konek->query("DELETE FROM `siswa` WHERE ((`id_siswa` = '$id'))");

    if($query){
        echo "<script>
              alert('Data Berhasil Di Hapus');
              window.location.href='../../administrator/data-psb.php'
              </script>";
    }else{
        echo "<script>
              alert('Data Berhasil Di Hapus');
              window.location.href='../../administrator/data-psb.php'
              </script>";
    }
}else{
    header("Location: ../../administrator/data-psb.php");
}

?>