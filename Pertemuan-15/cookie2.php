<?php
if(isset($_COOKIE['username'])) {
echo "<h1>Cookie 'username' ada. Isinya : " .
$_COOKIE['username'];
} else {
echo "<h1>Cookie 'username' TIDAK ada.</h1>";
}
if(isset($_COOKIE['namalengkap'])) { 
    echo "<h1>Cookie 'namalengkap' ada. Isinya : " .
$_COOKIE['namalengkap'];
} else {
echo "<h1>Cookie 'namalengkap' TIDAK ada.</h1>";
}
echo "<h2>Klik <a href='cookie1.php'>di sini</a> untuk
penciptaan cookies</h2>";
echo "<h2>Klik <a href='cookie3.php'>di sini</a> untuk
penghapusan cookies</h2>";
