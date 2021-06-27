<?php
include "../../config/koneksi.php";

$id = $_GET['id'];
$nilai  = $_POST['nilai'];
$status = $_POST['status'];

if(isset($_POST['edit'])){
    $query = $konek->query("UPDATE `hsl_tes` SET `nilai` = '$nilai', `status` = '$status' WHERE no_daftar = '$id'");
    
    if($query){
        echo "<script>
              alert('Data Berhasil Di Edit');
              window.location.href='../../administrator/hasil.php'
              </script>";
    }else{
        echo "<script>
              alert('Data Gagal Di Edit');
              window.location.href='../../administrator/hasil.php'
              </script>";
    }
}
?>