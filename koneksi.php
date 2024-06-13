<?php

$host = "localhost";
$user = "arya";
$pass = "312310224";
$db = "uts_312310224";
$koneksi = mysqli_connect($host, $user, $pass, $db);
if ($koneksi == false){
    echo "Koneksi ke server gagal";
    die();
}else{
    // echo "Koneksi berhasil";
}
?>