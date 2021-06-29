<?php
include "../config/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = $konek->query("SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'");
$cek   = $query->num_rows;

if($cek != null){
    session_start();
    $_SESSION['status'] = "login";
    header("Location: ../index.php");
}else{
    header("Location: ../index.php");
}
?>