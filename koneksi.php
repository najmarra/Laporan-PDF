<?php
$host     = "localhost";
$user     = "root";
$password = "Ara210506";
$database = "tutorial";

$connect = mysqli_connect($host, $user, $password, $database);

if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
