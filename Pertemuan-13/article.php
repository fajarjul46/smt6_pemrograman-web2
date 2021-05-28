<?
include "koneksi.php";
$judul = $_POST['title'];
$penulis = $_POST['author'];
$lead = $_POST['abstraksi'];
$isi = $_POST['content'];
$time = date("d M Y, H:i");
$lead = str_replace("\r\n", "<br>", $lead);
$content = str_replace("\r\n", "<br>", $isi);
$query = "INSERT INTO articles (judul,penulis,lead,content,waktu)
 values('$judul','$penulis','$lead','$isi','$time')";
$result = mysqli_query($koneksi, $query);
if ($result) {
    echo "<h3 align=center>Proses penambahan artikel berhasil</h3>";
    echo "<A href=\"tampil_articles.php\">List</A>";
} else {
    echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>";
}
