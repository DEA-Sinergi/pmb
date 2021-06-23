<?php
include_once('../config/koneksi.php');

if (isset($_GET['idS'])) {
    $id = $_GET['idS'];
    $hapus = $konek->query("DELETE FROM siswa WHERE id_siswa = '$id'");
    if ($hapus) {
        echo "<script>alert('data berhasil dihapus'); window.location.href='data-psb.php'</script>"
    }else{

    }
} if (isset($_GET['idH'])) {

}

?>