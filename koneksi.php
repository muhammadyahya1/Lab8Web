<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "latihan1";

$conn = mysqli_connect($host,$user,$pass,$db);
if ($conn->connect_error)
{
    die("koneksi ke database gagal");
} else{
    echo "koneksi ke database berhasil";
}

?>