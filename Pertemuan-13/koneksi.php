<?
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "artikel_db";
//lakukan koneksi dengan mysql
$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$koneksi) {
    echo "Tidak dapat terhubung dengan database";
    exit;
}

$con = $koneksi;
