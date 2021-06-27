<?php
include "../../config/koneksi.php";

    $id             = $_GET['id'];
    $ekstensi       = array('png', 'jpg', 'jpeg');
    $judul          = $_POST['judul'];
    $isi            = $_POST['isi'];
    $tanggal        = $_POST['tanggal'];
    $gambar         = $_FILES['foto']['name'];
    $x              = explode('.', $gambar);
    $ekstensiGam    = strtolower(end($x));
    $tmp_gambar     = $_FILES['foto']['tmp_name'];

if(isset($_POST['edit'])){
    $name = $konek->query("SELECT gambar FROM tb_berita WHERE id_berita = '$id'")->fetch_assoc()['gambar'];

    if($_FILES['foto']['name'] == null){
        $query = $konek->query("UPDATE `tb_berita` SET `judul` = '$judul', `isi_berita` = '$isi', `tanggal` = '$tanggal', `gambar` = '$name' WHERE id_berita = '$id'");
    }else{
        move_uploaded_file($tmp_gambar, $_SERVER['DOCUMENT_ROOT'].'/pmb/asset/img/berita/'.$gambar);
        $query = $konek->query("UPDATE `tb_berita` SET `judul` = '$judul', `isi_berita` = '$isi', `tanggal` = '$tanggal', `gambar` = '$gambar' WHERE id_berita = '$id'");

    }
    if($query){
        echo "<script>
        alert('Data Berhasil Di Edit');
        window.location.href='../../administrator/index.php'
        </script>";
    }else{
        echo "<script>
        alert('Data Gagal Di Edit');
        window.location.href='../../administrator/index.php'
        </script>";
    }
}
?>