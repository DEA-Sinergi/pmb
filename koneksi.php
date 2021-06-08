
<?php

$host  = 'localhost';
$user  = 'root';
$pass = '';
$db    = 'sitebu';

$connect =  mysqli_connect($host, $user, $pass, $db);
if($connect->connect_error){
echo 'Terjadi Kesalahan';
}

?>
