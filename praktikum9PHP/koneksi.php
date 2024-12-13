<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "praktikumdb";

$connect = new mysqli($host, $username, $password, $database);

if ($connect->connect_error) {
    die("Koneksi gagal: " . $connect->connect_error);
}
echo "Koneksi berhasil!";
?>
