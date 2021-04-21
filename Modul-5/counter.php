<html>

<head>
    <title>Contoh Counter</title>
</head>

<body>
    <?php
    $nama_file = "counter.dat";
    if (file_exists($nama_file)) {
        $berkas = fopen($nama_file, "r");
        $pencacah = (int)trim(fgets($berkas, 255));
        $pencacah++;
        Fclose($berkas);
    } else
        $pencacah = 1;
    // simpan pencacah
    $berkas = fopen($nama_file, "w");
    Fputs($berkas, $pencacah);
    Fclose($berkas);
    // tulis ke halaman web
    print("Anda pengunjung ke-$pencacah <br>\n"); ?>
</body>

</html>