<?php
include "../../config/koneksi.php";

if(isset($_POST['tambah'])){
    $ekstensi       = array('png', 'jpg', 'jpeg');
    $judul          = $_POST['judul'];
    $isi_pengumuman = $_POST['isi_pengumuman'];
    $tanggal        = $_POST['tanggal'];
    $gambar         = $_FILES['foto']['name'];
    $x              = explode('.', $gambar);
    $ekstensiGam    = strtolower(end($x));
    $tmp_gambar     = $_FILES['foto']['tmp_name'];
    
    if(in_array($ekstensiGam, $ekstensi) === true){
        move_uploaded_file($tmp_gambar, $_SERVER['DOCUMENT_ROOT'].'/pmb/asset/img/pengumuman/'.$gambar);
        $query = $konek->query("INSERT INTO `tb_pengumuman` (`judul`, `isi_berita`, `tanggal`, `gambar`) VALUES('$judul', '$isi_pengumuman', '$tanggal', '$gambar')");
        if($query){
            echo "<script>
                  alert('Data Berhasil Di Tambahkan');
                  window.location.href='../../administrator/pengumuman.php'
                  </script>";
        }else{
            echo "<script>
                  alert('Data Gagal Di Tambahkan Silahkan Hubungi CS')
                  window.location.replace('../../administrator/pengumuman.php');
                  </script>";
        }
    }
}

?>