<?php
include "../../config/koneksi.php";

// var_dump($konek);
$username = $_POST['username'];
$password = $_POST['password'];

$query = $konek->query("SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'");
if($query){
    session_start();
    $_SESSION['status'] = "login";
    header("Location: ../../administrator/berita.php");
}else{
    header("Location: ../../administrator/berita.php");
}
?>