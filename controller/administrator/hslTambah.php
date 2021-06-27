<?php
include "../../config/koneksi.php";

if(isset($_POST['tambah'])){

    $no_daftar = $_POST['no_daftar'];
    $nilai     = $_POST['nilai'];
    $status    = $_POST['status'];
    
    $query = $konek->query("INSERT INTO `hsl_tes` (`no_daftar`, `nilai`, `status`)VALUES ($no_daftar, '$nilai', '$status')");
    
    if($query){
        echo "<script>
              alert('Data Berhasil Di Tambahkan');
              window.location.href='../../administrator/hasil.php'
              </script>";
    }else{
        echo "<script>
              alert('Data Gagal Di Tambahkan Silahkan Hubungi CS')
              window.location.replace('../../administrator/hasil.php');
              </script>";
    }
}
?>