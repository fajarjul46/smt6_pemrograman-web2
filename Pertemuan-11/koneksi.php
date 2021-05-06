<?php
ini_set('date.timezone', 'Asia/Jakarta');
ini_set('max_execution_time', 300); //300 seconds = 5 minutes	
$host = "localhost";
$user = "root";
$password = "";
$database = "pert11_bukutamu";

$koneksi = mysqli_connect($host, $user, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal");
}
