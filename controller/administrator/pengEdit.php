<?php
include "../../config/koneksi.php";

    $id             = $_GET['id'];
    $ekstensi       = array('png', 'jpg', 'jpeg');
    $judul          = $_POST['judul'];
    $isi_pengumuman = $_POST['isi_pengumuman'];
    $tanggal        = $_POST['tanggal'];
    $gambar         = $_FILES['foto']['name'];
    $x              = explode('.', $gambar);
    $ekstensiGam    = strtolower(end($x));
    $tmp_gambar     = $_FILES['foto']['tmp_name'];

if(isset($_POST['edit'])){
    $name = $konek->query("SELECT gambar FROM tb_pengumuman WHERE id_pengumuman = '$id'")->fetch_assoc()['gambar'];

    if($_FILES['foto']['name'] == null){
        $query = $konek->query("UPDATE `tb_pengumuman` SET `judul` = '$judul', `isi_berita` = '$isi_pengumuman', `tanggal` = '$tanggal', `gambar` = '$name' WHERE id_pengumuman = '$id'");
    }else{
        move_uploaded_file($tmp_gambar, $_SERVER['DOCUMENT_ROOT'].'/pmb/asset/img/pengumuman/'.$gambar);
        $query = $konek->query("UPDATE `tb_pengumuman` SET `judul` = '$judul', `isi_berita` = '$isi_pengumuman', `tanggal` = '$tanggal', `gambar` = '$gambar' WHERE id_pengumuman = '$id'");

    }
    if($query){
        echo "<script>
        alert('Data Berhasil Di Edit');
        window.location.href='../../administrator/pengumuman.php'
        </script>";
    }else{
        echo "<script>
        alert('Data Gagal Di Edit');
        window.location.href='../../administrator/pengumuman.php'
        </script>";
    }
}
?>